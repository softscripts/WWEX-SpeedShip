<?php
/**
 * File for class MynewServiceStructUPSShipmentResponse

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructUPSShipmentResponse originally named UPSShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructUPSShipmentResponse extends MynewServiceWsdlClass
{
    /**
     * The serviceResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructResponseHeader
     */
    public $serviceResponse;
    /**
     * The shipmentResponseDetails
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentResponseDetails
     */
    public $shipmentResponseDetails;
    /**
     * Constructor method for UPSShipmentResponse
     * @see parent::__construct()
     * @param MynewServiceStructResponseHeader $_serviceResponse
     * @param MynewServiceStructShipmentResponseDetails $_shipmentResponseDetails
     * @return MynewServiceStructUPSShipmentResponse
     */
    public function __construct($_serviceResponse = NULL,$_shipmentResponseDetails = NULL)
    {
        parent::__construct(array('serviceResponse'=>$_serviceResponse,'shipmentResponseDetails'=>$_shipmentResponseDetails),false);
    }
    /**
     * Get serviceResponse value
     * @return MynewServiceStructResponseHeader|null
     */
    public function getServiceResponse()
    {
        return $this->serviceResponse;
    }
    /**
     * Set serviceResponse value
     * @param MynewServiceStructResponseHeader $_serviceResponse the serviceResponse
     * @return MynewServiceStructResponseHeader
     */
    public function setServiceResponse($_serviceResponse)
    {
        return ($this->serviceResponse = $_serviceResponse);
    }
    /**
     * Get shipmentResponseDetails value
     * @return MynewServiceStructShipmentResponseDetails|null
     */
    public function getShipmentResponseDetails()
    {
        return $this->shipmentResponseDetails;
    }
    /**
     * Set shipmentResponseDetails value
     * @param MynewServiceStructShipmentResponseDetails $_shipmentResponseDetails the shipmentResponseDetails
     * @return MynewServiceStructShipmentResponseDetails
     */
    public function setShipmentResponseDetails($_shipmentResponseDetails)
    {
        return ($this->shipmentResponseDetails = $_shipmentResponseDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructUPSShipmentResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
