<?php
/**
 * Test with MynewService for 'http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl'
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
ini_set('memory_limit','512M');
ini_set('display_errors',false);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MynewServiceAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a MynewServiceWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[MynewServiceWsdlClass::WSDL_URL] = 'http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl';
 * $wsdl[MynewServiceWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[MynewServiceWsdlClass::WSDL_TRACE] = true;
 * $wsdl[MynewServiceWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[MynewServiceWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new MynewServiceWsdlClass($wsdl);
 */
/**
 * Examples
 */



// etc....
/************************************
 * Example for MynewServiceServiceGet
 */

$wsdl = array();


$wsdl[MynewServiceWsdlClass::WSDL_URL] = 'SpeedShip2Service1.wsdl';

$auth = array('loginId' => "LoginID", 'password' => "password",'licenseKey'=>'licensekey','accountNumber'=>'accountnumber') ;

$_serviceOptions = array('shipmentType' => 'S');
$_shipFrom = array('city' => 'New York', 'countryCode' => 'US', 'postalCode' => '10017', 'state' => 'NY', 'residentialIndicato');
$_shipTo   = array('city' => 'New York', 'countryCode' => 'US', 'postalCode' => '10017', 'state' => 'NY', 'residentialIndicato');
$_shipmentPackages = array( 'shipmentPackage' => array(
        'additonalHandling' => 'N', 
        'codPaymentForm' => 'N',
        'confirmDeliveryOption' => 'N',
        'packageNumber' => '1',
        'packageType' => '01',
        'weight' => '10',
        'largePackage' => '0',
				'handlingChargeAmount' => '0'
        )
    );

$request['upsServiceDetailRequest']['serviceOptions']['additionalParameters']['shipmentParameter']['name'] = '';
				$request['upsServiceDetailRequest']['serviceOptions']['additionalParameters']['shipmentParameter']['value'] = '';

$ship = array('serviceOptions'=>$_serviceOptions,'shipFrom'=>$_shipFrom,'shipTo'=>$_shipTo,'shipmentPackages'=>$_shipmentPackages);




$mynewServiceServiceGet = new MynewServiceServiceGet();
// sample call for MynewServiceServiceGet::setSoapHeaderAuthenticationDetail() in order to initialize required SoapHeader
$mynewServiceServiceGet->setSoapHeaderAuthenticationDetail(new MynewServiceStructAuthenticationDetail($auth));
// sample call for MynewServiceServiceGet::getUPSServiceDetails()
if($mynewServiceServiceGet->getUPSServiceDetails(new MynewServiceStructGetUPSServiceDetails($ship)))
	
			//$result_str  = $mynewServiceServiceGet->getResult();
//echo '<br>';
//echo $mynewServiceServiceGet->getResult()->upsServiceDetailResponse->serviceResponse->responseStatusCode;
//echo '<br>';

if($mynewServiceServiceGet->getResult()->upsServiceDetailResponse->serviceResponse->responseStatusCode==0) {

//print_r($mynewServiceServiceGet->getResult());



//print_r($mynewServiceServiceGet->getResult()->upsServiceDetailResponse->upsServiceDetails->upsServiceDetail);

foreach($mynewServiceServiceGet->getResult()->upsServiceDetailResponse->upsServiceDetails->upsServiceDetail as $key => $service_details) {

echo '<br><br>';
print_r($service_details->serviceFeeDetail->packageLevelFees->packageLevelFee[0]->feeItems);
echo '<br><br>';
print_r($service_details->serviceFeeDetail->packageLevelFees->packageLevelFee[0]);
foreach($service_details->serviceFeeDetail->packageLevelFees->packageLevelFee->feeItems->feeitem as $feeitem) {
print_r($feeitem);

}
$str_new="<ul>";
foreach($service_details->serviceFeeDetail->packageLevelFees->packageLevelFee->MynewServiceStructPackageLevelFee->feeItems as $feeitem) {


}
echo "<table cellpadding='5' border='1'><tr><td>".$service_details->rateEstimateId."</td><td>".$service_details->serviceCode."</td><td>".$service_details->serviceDescription."</td><td>".$service_details->pickupBy."</td></tr>".$str_new."</table>";


}

//print_r($mynewServiceServiceGet->getResult());

}

else
    print_r($mynewServiceServiceGet->getLastError());

?>
<!--

/*************************************
 * Example for MynewServiceServiceVoid
 */
$mynewServiceServiceVoid = new MynewServiceServiceVoid();
// sample call for MynewServiceServiceVoid::setSoapHeaderAuthenticationDetail() in order to initialize required SoapHeader
$mynewServiceServiceVoid->setSoapHeaderAuthenticationDetail(new MynewServiceStructAuthenticationDetail(/*** update parameters list ***/));
// sample call for MynewServiceServiceVoid::voidUPSShipment()
if($mynewServiceServiceVoid->voidUPSShipment(new MynewServiceStructVoidUPSShipment(/*** update parameters list ***/)))
    print_r($mynewServiceServiceVoid->getResult());
else
    print_r($mynewServiceServiceVoid->getLastError());

/**************************************
 * Example for MynewServiceServiceTrack
 */
$mynewServiceServiceTrack = new MynewServiceServiceTrack();
// sample call for MynewServiceServiceTrack::setSoapHeaderAuthenticationDetail() in order to initialize required SoapHeader
$mynewServiceServiceTrack->setSoapHeaderAuthenticationDetail(new MynewServiceStructAuthenticationDetail(/*** update parameters list ***/));
// sample call for MynewServiceServiceTrack::trackUPSShipment()
if($mynewServiceServiceTrack->trackUPSShipment(new MynewServiceStructTrackUPSShipment(/*** update parameters list ***/)))
    print_r($mynewServiceServiceTrack->getResult());
else
    print_r($mynewServiceServiceTrack->getLastError());

/*************************************
 * Example for MynewServiceServiceShip
 */
$mynewServiceServiceShip = new MynewServiceServiceShip();
// sample call for MynewServiceServiceShip::setSoapHeaderAuthenticationDetail() in order to initialize required SoapHeader
$mynewServiceServiceShip->setSoapHeaderAuthenticationDetail(new MynewServiceStructAuthenticationDetail(/*** update parameters list ***/));
// sample call for MynewServiceServiceShip::shipRatedService()
if($mynewServiceServiceShip->shipRatedService(new MynewServiceStructShipRatedService(/*** update parameters list ***/)))
    print_r($mynewServiceServiceShip->getResult());
else
    print_r($mynewServiceServiceShip->getLastError());
// sample call for MynewServiceServiceShip::shipUPSShipment()
if($mynewServiceServiceShip->shipUPSShipment(new MynewServiceStructShipUPSShipment(/*** update parameters list ***/)))
    print_r($mynewServiceServiceShip->getResult());
else
    print_r($mynewServiceServiceShip->getLastError());

-->
