<?php
/**
 * File for class MynewServiceStructUPSServiceDetail

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructUPSServiceDetail originally named UPSServiceDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructUPSServiceDetail extends MynewServiceWsdlClass
{
    /**
     * The estimateDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $estimateDelivery;
    /**
     * The pickupBy
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupBy;
    /**
     * The rateEstimateId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $rateEstimateId;
    /**
     * The serviceCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $serviceCode;
    /**
     * The serviceDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $serviceDescription;
    /**
     * The serviceFeeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructServiceFeeDetail
     */
    public $serviceFeeDetail;
    /**
     * Constructor method for UPSServiceDetail
     * @see parent::__construct()
     * @param string $_estimateDelivery
     * @param string $_pickupBy
     * @param string $_rateEstimateId
     * @param string $_serviceCode
     * @param string $_serviceDescription
     * @param MynewServiceStructServiceFeeDetail $_serviceFeeDetail
     * @return MynewServiceStructUPSServiceDetail
     */
    public function __construct($_estimateDelivery = NULL,$_pickupBy = NULL,$_rateEstimateId = NULL,$_serviceCode = NULL,$_serviceDescription = NULL,$_serviceFeeDetail = NULL)
    {
        parent::__construct(array('estimateDelivery'=>$_estimateDelivery,'pickupBy'=>$_pickupBy,'rateEstimateId'=>$_rateEstimateId,'serviceCode'=>$_serviceCode,'serviceDescription'=>$_serviceDescription,'serviceFeeDetail'=>$_serviceFeeDetail),false);
    }
    /**
     * Get estimateDelivery value
     * @return string|null
     */
    public function getEstimateDelivery()
    {
        return $this->estimateDelivery;
    }
    /**
     * Set estimateDelivery value
     * @param string $_estimateDelivery the estimateDelivery
     * @return string
     */
    public function setEstimateDelivery($_estimateDelivery)
    {
        return ($this->estimateDelivery = $_estimateDelivery);
    }
    /**
     * Get pickupBy value
     * @return string|null
     */
    public function getPickupBy()
    {
        return $this->pickupBy;
    }
    /**
     * Set pickupBy value
     * @param string $_pickupBy the pickupBy
     * @return string
     */
    public function setPickupBy($_pickupBy)
    {
        return ($this->pickupBy = $_pickupBy);
    }
    /**
     * Get rateEstimateId value
     * @return string|null
     */
    public function getRateEstimateId()
    {
        return $this->rateEstimateId;
    }
    /**
     * Set rateEstimateId value
     * @param string $_rateEstimateId the rateEstimateId
     * @return string
     */
    public function setRateEstimateId($_rateEstimateId)
    {
        return ($this->rateEstimateId = $_rateEstimateId);
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $_serviceCode the serviceCode
     * @return string
     */
    public function setServiceCode($_serviceCode)
    {
        return ($this->serviceCode = $_serviceCode);
    }
    /**
     * Get serviceDescription value
     * @return string|null
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }
    /**
     * Set serviceDescription value
     * @param string $_serviceDescription the serviceDescription
     * @return string
     */
    public function setServiceDescription($_serviceDescription)
    {
        return ($this->serviceDescription = $_serviceDescription);
    }
    /**
     * Get serviceFeeDetail value
     * @return MynewServiceStructServiceFeeDetail|null
     */
    public function getServiceFeeDetail()
    {
        return $this->serviceFeeDetail;
    }
    /**
     * Set serviceFeeDetail value
     * @param MynewServiceStructServiceFeeDetail $_serviceFeeDetail the serviceFeeDetail
     * @return MynewServiceStructServiceFeeDetail
     */
    public function setServiceFeeDetail($_serviceFeeDetail)
    {
        return ($this->serviceFeeDetail = $_serviceFeeDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructUPSServiceDetail
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
