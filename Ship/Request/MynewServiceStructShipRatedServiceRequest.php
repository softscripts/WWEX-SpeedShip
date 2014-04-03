<?php
/**
 * File for class MynewServiceStructShipRatedServiceRequest

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-28
 */
/**
 * This class stands for MynewServiceStructShipRatedServiceRequest originally named ShipRatedServiceRequest
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipRatedServiceRequest extends MynewServiceWsdlClass
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
     * The senderFullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructSenderFullAddress
     */
    public $senderFullAddress;
    /**
     * The shipmentAdditionalServiceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentAdditionalServiceOptions
     */
    public $shipmentAdditionalServiceOptions;
    /**
     * The shipmentPackageAdditionalInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackageAdditionalInfo
     */
    public $shipmentPackageAdditionalInfo;
    /**
     * The shipmentRateEstimateId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentRateEstimateId;
    /**
     * Constructor method for ShipRatedServiceRequest
     * @see parent::__construct()
     * @param MynewServiceStructBillChargesToDetail $_billChargesToDetail
     * @param MynewServiceStructReceiverFullAddress $_receiverFullAddress
     * @param MynewServiceStructReturnFullAddress $_returnShipmentAddress
     * @param MynewServiceStructSenderFullAddress $_senderFullAddress
     * @param MynewServiceStructShipmentAdditionalServiceOptions $_shipmentAdditionalServiceOptions
     * @param MynewServiceStructShipmentPackageAdditionalInfo $_shipmentPackageAdditionalInfo
     * @param string $_shipmentRateEstimateId
     * @return MynewServiceStructShipRatedServiceRequest
     */
    public function __construct($_billChargesToDetail = NULL,$_receiverFullAddress = NULL,$_returnShipmentAddress = NULL,$_senderFullAddress = NULL,$_shipmentAdditionalServiceOptions = NULL,$_shipmentPackageAdditionalInfo = NULL,$_shipmentRateEstimateId = NULL)
    {
        parent::__construct(array('billChargesToDetail'=>$_billChargesToDetail,'receiverFullAddress'=>$_receiverFullAddress,'returnShipmentAddress'=>$_returnShipmentAddress,'senderFullAddress'=>$_senderFullAddress,'shipmentAdditionalServiceOptions'=>$_shipmentAdditionalServiceOptions,'shipmentPackageAdditionalInfo'=>$_shipmentPackageAdditionalInfo,'shipmentRateEstimateId'=>$_shipmentRateEstimateId),false);
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
     * Get shipmentAdditionalServiceOptions value
     * @return MynewServiceStructShipmentAdditionalServiceOptions|null
     */
    public function getShipmentAdditionalServiceOptions()
    {
        return $this->shipmentAdditionalServiceOptions;
    }
    /**
     * Set shipmentAdditionalServiceOptions value
     * @param MynewServiceStructShipmentAdditionalServiceOptions $_shipmentAdditionalServiceOptions the shipmentAdditionalServiceOptions
     * @return MynewServiceStructShipmentAdditionalServiceOptions
     */
    public function setShipmentAdditionalServiceOptions($_shipmentAdditionalServiceOptions)
    {
        return ($this->shipmentAdditionalServiceOptions = $_shipmentAdditionalServiceOptions);
    }
    /**
     * Get shipmentPackageAdditionalInfo value
     * @return MynewServiceStructShipmentPackageAdditionalInfo|null
     */
    public function getShipmentPackageAdditionalInfo()
    {
        return $this->shipmentPackageAdditionalInfo;
    }
    /**
     * Set shipmentPackageAdditionalInfo value
     * @param MynewServiceStructShipmentPackageAdditionalInfo $_shipmentPackageAdditionalInfo the shipmentPackageAdditionalInfo
     * @return MynewServiceStructShipmentPackageAdditionalInfo
     */
    public function setShipmentPackageAdditionalInfo($_shipmentPackageAdditionalInfo)
    {
        return ($this->shipmentPackageAdditionalInfo = $_shipmentPackageAdditionalInfo);
    }
    /**
     * Get shipmentRateEstimateId value
     * @return string|null
     */
    public function getShipmentRateEstimateId()
    {
        return $this->shipmentRateEstimateId;
    }
    /**
     * Set shipmentRateEstimateId value
     * @param string $_shipmentRateEstimateId the shipmentRateEstimateId
     * @return string
     */
    public function setShipmentRateEstimateId($_shipmentRateEstimateId)
    {
        return ($this->shipmentRateEstimateId = $_shipmentRateEstimateId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipRatedServiceRequest
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
