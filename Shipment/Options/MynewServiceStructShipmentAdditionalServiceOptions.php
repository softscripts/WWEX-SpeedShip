<?php
/**
 * File for class MynewServiceStructShipmentAdditionalServiceOptions

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentAdditionalServiceOptions originally named ShipmentAdditionalServiceOptions
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentAdditionalServiceOptions extends MynewServiceWsdlClass
{
    /**
     * The emailShippingLabelDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructEmailShippingLabelDetail
     */
    public $emailShippingLabelDetail;
    /**
     * The schedulePickupDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructSchedulePickupDetail
     */
    public $schedulePickupDetail;
    /**
     * The sendEmailNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructSendEmailNotificationDetail
     */
    public $sendEmailNotificationDetail;
    /**
     * The senderReceiptIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $senderReceiptIndicator;
    /**
     * The shipmentLabelSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentLabelSize;
    /**
     * The shipperReleaseIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipperReleaseIndicator;
    /**
     * Constructor method for ShipmentAdditionalServiceOptions
     * @see parent::__construct()
     * @param MynewServiceStructEmailShippingLabelDetail $_emailShippingLabelDetail
     * @param MynewServiceStructSchedulePickupDetail $_schedulePickupDetail
     * @param MynewServiceStructSendEmailNotificationDetail $_sendEmailNotificationDetail
     * @param string $_senderReceiptIndicator
     * @param string $_shipmentLabelSize
     * @param string $_shipperReleaseIndicator
     * @return MynewServiceStructShipmentAdditionalServiceOptions
     */
    public function __construct($_emailShippingLabelDetail = NULL,$_schedulePickupDetail = NULL,$_sendEmailNotificationDetail = NULL,$_senderReceiptIndicator = NULL,$_shipmentLabelSize = NULL,$_shipperReleaseIndicator = NULL)
    {
        parent::__construct(array('emailShippingLabelDetail'=>$_emailShippingLabelDetail,'schedulePickupDetail'=>$_schedulePickupDetail,'sendEmailNotificationDetail'=>$_sendEmailNotificationDetail,'senderReceiptIndicator'=>$_senderReceiptIndicator,'shipmentLabelSize'=>$_shipmentLabelSize,'shipperReleaseIndicator'=>$_shipperReleaseIndicator),false);
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
     * Get schedulePickupDetail value
     * @return MynewServiceStructSchedulePickupDetail|null
     */
    public function getSchedulePickupDetail()
    {
        return $this->schedulePickupDetail;
    }
    /**
     * Set schedulePickupDetail value
     * @param MynewServiceStructSchedulePickupDetail $_schedulePickupDetail the schedulePickupDetail
     * @return MynewServiceStructSchedulePickupDetail
     */
    public function setSchedulePickupDetail($_schedulePickupDetail)
    {
        return ($this->schedulePickupDetail = $_schedulePickupDetail);
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
     * Get senderReceiptIndicator value
     * @return string|null
     */
    public function getSenderReceiptIndicator()
    {
        return $this->senderReceiptIndicator;
    }
    /**
     * Set senderReceiptIndicator value
     * @param string $_senderReceiptIndicator the senderReceiptIndicator
     * @return string
     */
    public function setSenderReceiptIndicator($_senderReceiptIndicator)
    {
        return ($this->senderReceiptIndicator = $_senderReceiptIndicator);
    }
    /**
     * Get shipmentLabelSize value
     * @return string|null
     */
    public function getShipmentLabelSize()
    {
        return $this->shipmentLabelSize;
    }
    /**
     * Set shipmentLabelSize value
     * @param string $_shipmentLabelSize the shipmentLabelSize
     * @return string
     */
    public function setShipmentLabelSize($_shipmentLabelSize)
    {
        return ($this->shipmentLabelSize = $_shipmentLabelSize);
    }
    /**
     * Get shipperReleaseIndicator value
     * @return string|null
     */
    public function getShipperReleaseIndicator()
    {
        return $this->shipperReleaseIndicator;
    }
    /**
     * Set shipperReleaseIndicator value
     * @param string $_shipperReleaseIndicator the shipperReleaseIndicator
     * @return string
     */
    public function setShipperReleaseIndicator($_shipperReleaseIndicator)
    {
        return ($this->shipperReleaseIndicator = $_shipperReleaseIndicator);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentAdditionalServiceOptions
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
