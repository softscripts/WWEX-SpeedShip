<?php
/**
 * File for class MynewServiceStructShipUPSRequest

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipUPSRequest originally named ShipUPSRequest
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipUPSRequest extends MynewServiceWsdlClass
{
    /**
     * The billChargesToDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructBillChargesToDetail
     */
    public $billChargesToDetail;
    /**
     * The emailShippingLabelDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructEmailShippingLabelDetail
     */
    public $emailShippingLabelDetail;
    /**
     * The receiverFullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructReceiverFullAddress
     */
    public $receiverFullAddress;
    /**
     * The returnShipmentAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructReturnFullAddress
     */
    public $returnShipmentAddress;
    /**
     * The sendEmailNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructSendEmailNotificationDetail
     */
    public $sendEmailNotificationDetail;
    /**
     * The senderFullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructSenderFullAddress
     */
    public $senderFullAddress;
    /**
     * The shipmentFullServiceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentFullServiceOptions
     */
    public $shipmentFullServiceOptions;
    /**
     * The shipmentPackagesWithAddInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackagesWithAddInfo
     */
    public $shipmentPackagesWithAddInfo;
    /**
     * The shipmentPickupInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPickupInfo
     */
    public $shipmentPickupInfo;
    /**
     * The shipmentServiceCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentServiceCode;
    /**
     * Constructor method for ShipUPSRequest
     * @see parent::__construct()
     * @param MynewServiceStructBillChargesToDetail $_billChargesToDetail
     * @param MynewServiceStructEmailShippingLabelDetail $_emailShippingLabelDetail
     * @param MynewServiceStructReceiverFullAddress $_receiverFullAddress
     * @param MynewServiceStructReturnFullAddress $_returnShipmentAddress
     * @param MynewServiceStructSendEmailNotificationDetail $_sendEmailNotificationDetail
     * @param MynewServiceStructSenderFullAddress $_senderFullAddress
     * @param MynewServiceStructShipmentFullServiceOptions $_shipmentFullServiceOptions
     * @param MynewServiceStructShipmentPackagesWithAddInfo $_shipmentPackagesWithAddInfo
     * @param MynewServiceStructShipmentPickupInfo $_shipmentPickupInfo
     * @param string $_shipmentServiceCode
     * @return MynewServiceStructShipUPSRequest
     */
    public function __construct($_billChargesToDetail = NULL,$_emailShippingLabelDetail = NULL,$_receiverFullAddress = NULL,$_returnShipmentAddress = NULL,$_sendEmailNotificationDetail = NULL,$_senderFullAddress = NULL,$_shipmentFullServiceOptions = NULL,$_shipmentPackagesWithAddInfo = NULL,$_shipmentPickupInfo = NULL,$_shipmentServiceCode = NULL)
    {
        parent::__construct(array('billChargesToDetail'=>$_billChargesToDetail,'emailShippingLabelDetail'=>$_emailShippingLabelDetail,'receiverFullAddress'=>$_receiverFullAddress,'returnShipmentAddress'=>$_returnShipmentAddress,'sendEmailNotificationDetail'=>$_sendEmailNotificationDetail,'senderFullAddress'=>$_senderFullAddress,'shipmentFullServiceOptions'=>$_shipmentFullServiceOptions,'shipmentPackagesWithAddInfo'=>$_shipmentPackagesWithAddInfo,'shipmentPickupInfo'=>$_shipmentPickupInfo,'shipmentServiceCode'=>$_shipmentServiceCode),false);
    }
    /**
     * Get billChargesToDetail value
     * @return MynewServiceStructBillChargesToDetail|null
     */
    public function getBillChargesToDetail()
    {
        return $this->billChargesToDetail;
    }
    /**
     * Set billChargesToDetail value
     * @param MynewServiceStructBillChargesToDetail $_billChargesToDetail the billChargesToDetail
     * @return MynewServiceStructBillChargesToDetail
     */
    public function setBillChargesToDetail($_billChargesToDetail)
    {
        return ($this->billChargesToDetail = $_billChargesToDetail);
    }
    /**
     * Get emailShippingLabelDetail value
     * @return MynewServiceStructEmailShippingLabelDetail|null
     */
    public function getEmailShippingLabelDetail()
    {
        return $this->emailShippingLabelDetail;
    }
    /**
     * Set emailShippingLabelDetail value
     * @param MynewServiceStructEmailShippingLabelDetail $_emailShippingLabelDetail the emailShippingLabelDetail
     * @return MynewServiceStructEmailShippingLabelDetail
     */
    public function setEmailShippingLabelDetail($_emailShippingLabelDetail)
    {
        return ($this->emailShippingLabelDetail = $_emailShippingLabelDetail);
    }
    /**
     * Get receiverFullAddress value
     * @return MynewServiceStructReceiverFullAddress|null
     */
    public function getReceiverFullAddress()
    {
        return $this->receiverFullAddress;
    }
    /**
     * Set receiverFullAddress value
     * @param MynewServiceStructReceiverFullAddress $_receiverFullAddress the receiverFullAddress
     * @return MynewServiceStructReceiverFullAddress
     */
    public function setReceiverFullAddress($_receiverFullAddress)
    {
        return ($this->receiverFullAddress = $_receiverFullAddress);
    }
    /**
     * Get returnShipmentAddress value
     * @return MynewServiceStructReturnFullAddress|null
     */
    public function getReturnShipmentAddress()
    {
        return $this->returnShipmentAddress;
    }
    /**
     * Set returnShipmentAddress value
     * @param MynewServiceStructReturnFullAddress $_returnShipmentAddress the returnShipmentAddress
     * @return MynewServiceStructReturnFullAddress
     */
    public function setReturnShipmentAddress($_returnShipmentAddress)
    {
        return ($this->returnShipmentAddress = $_returnShipmentAddress);
    }
    /**
     * Get sendEmailNotificationDetail value
     * @return MynewServiceStructSendEmailNotificationDetail|null
     */
    public function getSendEmailNotificationDetail()
    {
        return $this->sendEmailNotificationDetail;
    }
    /**
     * Set sendEmailNotificationDetail value
     * @param MynewServiceStructSendEmailNotificationDetail $_sendEmailNotificationDetail the sendEmailNotificationDetail
     * @return MynewServiceStructSendEmailNotificationDetail
     */
    public function setSendEmailNotificationDetail($_sendEmailNotificationDetail)
    {
        return ($this->sendEmailNotificationDetail = $_sendEmailNotificationDetail);
    }
    /**
     * Get senderFullAddress value
     * @return MynewServiceStructSenderFullAddress|null
     */
    public function getSenderFullAddress()
    {
        return $this->senderFullAddress;
    }
    /**
     * Set senderFullAddress value
     * @param MynewServiceStructSenderFullAddress $_senderFullAddress the senderFullAddress
     * @return MynewServiceStructSenderFullAddress
     */
    public function setSenderFullAddress($_senderFullAddress)
    {
        return ($this->senderFullAddress = $_senderFullAddress);
    }
    /**
     * Get shipmentFullServiceOptions value
     * @return MynewServiceStructShipmentFullServiceOptions|null
     */
    public function getShipmentFullServiceOptions()
    {
        return $this->shipmentFullServiceOptions;
    }
    /**
     * Set shipmentFullServiceOptions value
     * @param MynewServiceStructShipmentFullServiceOptions $_shipmentFullServiceOptions the shipmentFullServiceOptions
     * @return MynewServiceStructShipmentFullServiceOptions
     */
    public function setShipmentFullServiceOptions($_shipmentFullServiceOptions)
    {
        return ($this->shipmentFullServiceOptions = $_shipmentFullServiceOptions);
    }
    /**
     * Get shipmentPackagesWithAddInfo value
     * @return MynewServiceStructShipmentPackagesWithAddInfo|null
     */
    public function getShipmentPackagesWithAddInfo()
    {
        return $this->shipmentPackagesWithAddInfo;
    }
    /**
     * Set shipmentPackagesWithAddInfo value
     * @param MynewServiceStructShipmentPackagesWithAddInfo $_shipmentPackagesWithAddInfo the shipmentPackagesWithAddInfo
     * @return MynewServiceStructShipmentPackagesWithAddInfo
     */
    public function setShipmentPackagesWithAddInfo($_shipmentPackagesWithAddInfo)
    {
        return ($this->shipmentPackagesWithAddInfo = $_shipmentPackagesWithAddInfo);
    }
    /**
     * Get shipmentPickupInfo value
     * @return MynewServiceStructShipmentPickupInfo|null
     */
    public function getShipmentPickupInfo()
    {
        return $this->shipmentPickupInfo;
    }
    /**
     * Set shipmentPickupInfo value
     * @param MynewServiceStructShipmentPickupInfo $_shipmentPickupInfo the shipmentPickupInfo
     * @return MynewServiceStructShipmentPickupInfo
     */
    public function setShipmentPickupInfo($_shipmentPickupInfo)
    {
        return ($this->shipmentPickupInfo = $_shipmentPickupInfo);
    }
    /**
     * Get shipmentServiceCode value
     * @return string|null
     */
    public function getShipmentServiceCode()
    {
        return $this->shipmentServiceCode;
    }
    /**
     * Set shipmentServiceCode value
     * @param string $_shipmentServiceCode the shipmentServiceCode
     * @return string
     */
    public function setShipmentServiceCode($_shipmentServiceCode)
    {
        return ($this->shipmentServiceCode = $_shipmentServiceCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipUPSRequest
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
