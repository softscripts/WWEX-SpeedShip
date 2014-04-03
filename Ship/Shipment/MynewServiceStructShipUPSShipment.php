<?php
/**
 * File for class MynewServiceStructShipUPSShipment

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipUPSShipment originally named shipUPSShipment
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipUPSShipment extends MynewServiceWsdlClass
{
    /**
     * The shipUPSRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipUPSRequest
     */
    public $shipUPSRequest;
    /**
     * Constructor method for shipUPSShipment
     * @see parent::__construct()
     * @param MynewServiceStructShipUPSRequest $_shipUPSRequest
     * @return MynewServiceStructShipUPSShipment
     */
    public function __construct($_shipUPSRequest = NULL)
    {
        parent::__construct(array('shipUPSRequest'=>$_shipUPSRequest),false);
    }
    /**
     * Get shipUPSRequest value
     * @return MynewServiceStructShipUPSRequest|null
     */
    public function getShipUPSRequest()
    {
        return $this->shipUPSRequest;
    }
    /**
     * Set shipUPSRequest value
     * @param MynewServiceStructShipUPSRequest $_shipUPSRequest the shipUPSRequest
     * @return MynewServiceStructShipUPSRequest
     */
    public function setShipUPSRequest($_shipUPSRequest)
    {
        return ($this->shipUPSRequest = $_shipUPSRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipUPSShipment
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
