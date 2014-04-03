<?php
/**
 * File for the class which returns the class map definition
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * Class which returns the class map definition by the static method MynewServiceClassMap::classMap()
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AdditionalParameters' => 'MynewServiceStructAdditionalParameters',
  'AuthenticationToken' => 'MynewServiceStructAuthenticationToken',
  'BillChargesToDetail' => 'MynewServiceStructBillChargesToDetail',
  'BillDutiesAndTaxesToDetail' => 'MynewServiceStructBillDutiesAndTaxesToDetail',
  'BillDutiesAndTaxesToInfo' => 'MynewServiceStructBillDutiesAndTaxesToInfo',
  'BillShippingChargeToDetail' => 'MynewServiceStructBillShippingChargeToDetail',
  'BillShippingChargeToInfo' => 'MynewServiceStructBillShippingChargeToInfo',
  'CommonFullAddress' => 'MynewServiceStructCommonFullAddress',
  'EmailShippingLabelDetail' => 'MynewServiceStructEmailShippingLabelDetail',
  'ErrorDescription' => 'MynewServiceStructErrorDescription',
  'FeeItem' => 'MynewServiceStructFeeItem',
  'FeeItems' => 'MynewServiceStructFeeItems',
  'Notification' => 'MynewServiceStructNotification',
  'NotificationEmailDetail' => 'MynewServiceStructNotificationEmailDetail',
  'NotificationEmailDetails' => 'MynewServiceStructNotificationEmailDetails',
  'PackageLevelFee' => 'MynewServiceStructPackageLevelFee',
  'PackageLevelFees' => 'MynewServiceStructPackageLevelFees',
  'RateServiceOptions' => 'MynewServiceStructRateServiceOptions',
  'ReceiverFullAddress' => 'MynewServiceStructReceiverFullAddress',
  'ResponseHeader' => 'MynewServiceStructResponseHeader',
  'ReturnFullAddress' => 'MynewServiceStructReturnFullAddress',
  'SchedulePickupDetail' => 'MynewServiceStructSchedulePickupDetail',
  'SendEmailNotificationDetail' => 'MynewServiceStructSendEmailNotificationDetail',
  'SenderFullAddress' => 'MynewServiceStructSenderFullAddress',
  'ServiceFeeDetail' => 'MynewServiceStructServiceFeeDetail',
  'ShipRatedServiceRequest' => 'MynewServiceStructShipRatedServiceRequest',
  'ShipUPSRequest' => 'MynewServiceStructShipUPSRequest',
  'ShipmentAdditionalServiceOptions' => 'MynewServiceStructShipmentAdditionalServiceOptions',
  'ShipmentDoc' => 'MynewServiceStructShipmentDoc',
  'ShipmentDocs' => 'MynewServiceStructShipmentDocs',
  'ShipmentFullServiceOptions' => 'MynewServiceStructShipmentFullServiceOptions',
  'ShipmentLabel' => 'MynewServiceStructShipmentLabel',
  'ShipmentLabels' => 'MynewServiceStructShipmentLabels',
  'ShipmentLevelFee' => 'MynewServiceStructShipmentLevelFee',
  'ShipmentNumbers' => 'MynewServiceStructShipmentNumbers',
  'ShipmentPackage' => 'MynewServiceStructShipmentPackage',
  'ShipmentPackageAdditionalInfo' => 'MynewServiceStructShipmentPackageAdditionalInfo',
  'ShipmentPackageDescription' => 'MynewServiceStructShipmentPackageDescription',
  'ShipmentPackageDescriptions' => 'MynewServiceStructShipmentPackageDescriptions',
  'ShipmentPackageWithAddInfo' => 'MynewServiceStructShipmentPackageWithAddInfo',
  'ShipmentPackages' => 'MynewServiceStructShipmentPackages',
  'ShipmentPackagesWithAddInfo' => 'MynewServiceStructShipmentPackagesWithAddInfo',
  'ShipmentParameter' => 'MynewServiceStructShipmentParameter',
  'ShipmentPickupInfo' => 'MynewServiceStructShipmentPickupInfo',
  'ShipmentReference' => 'MynewServiceStructShipmentReference',
  'ShipmentReferences' => 'MynewServiceStructShipmentReferences',
  'ShipmentResponseDetail' => 'MynewServiceStructShipmentResponseDetail',
  'ShipmentResponseDetails' => 'MynewServiceStructShipmentResponseDetails',
  'ShipmentTrackingDetails' => 'MynewServiceStructShipmentTrackingDetails',
  'ShipmentVoidDetail' => 'MynewServiceStructShipmentVoidDetail',
  'ShipmentVoidDetails' => 'MynewServiceStructShipmentVoidDetails',
  'SimpleShipmentAddress' => 'MynewServiceStructSimpleShipmentAddress',
  'TrackShipmentRequest' => 'MynewServiceStructTrackShipmentRequest',
  'TrackShipmentResponse' => 'MynewServiceStructTrackShipmentResponse',
  'UPSServiceDetail' => 'MynewServiceStructUPSServiceDetail',
  'UPSServiceDetailRequest' => 'MynewServiceStructUPSServiceDetailRequest',
  'UPSServiceDetailResponse' => 'MynewServiceStructUPSServiceDetailResponse',
  'UPSServiceDetails' => 'MynewServiceStructUPSServiceDetails',
  'UPSShipmentResponse' => 'MynewServiceStructUPSShipmentResponse',
  'VoidShipmentRequest' => 'MynewServiceStructVoidShipmentRequest',
  'VoidShipmentResponse' => 'MynewServiceStructVoidShipmentResponse',
  'authenticationDetail' => 'MynewServiceStructAuthenticationDetail',
  'getUPSServiceDetails' => 'MynewServiceStructGetUPSServiceDetails',
  'getUPSServiceDetailsResponse' => 'MynewServiceStructGetUPSServiceDetailsResponse',
  'shipRatedService' => 'MynewServiceStructShipRatedService',
  'shipRatedServiceResponse' => 'MynewServiceStructShipRatedServiceResponse',
  'shipUPSShipment' => 'MynewServiceStructShipUPSShipment',
  'shipUPSShipmentResponse' => 'MynewServiceStructShipUPSShipmentResponse',
  'trackUPSShipment' => 'MynewServiceStructTrackUPSShipment',
  'trackUPSShipmentResponse' => 'MynewServiceStructTrackUPSShipmentResponse',
  'voidUPSShipment' => 'MynewServiceStructVoidUPSShipment',
  'voidUPSShipmentResponse' => 'MynewServiceStructVoidUPSShipmentResponse',
);
    }
}
