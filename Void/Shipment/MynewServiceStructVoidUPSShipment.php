<?php
/**
 * File for class MynewServiceStructVoidUPSShipment

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructVoidUPSShipment originally named voidUPSShipment
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructVoidUPSShipment extends MynewServiceWsdlClass
{
    /**
     * The voidShipmentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructVoidShipmentRequest
     */
    public $voidShipmentRequest;
    /**
     * Constructor method for voidUPSShipment
     * @see parent::__construct()
     * @param MynewServiceStructVoidShipmentRequest $_voidShipmentRequest
     * @return MynewServiceStructVoidUPSShipment
     */
    public function __construct($_voidShipmentRequest = NULL)
    {
        parent::__construct(array('voidShipmentRequest'=>$_voidShipmentRequest),false);
    }
    /**
     * Get voidShipmentRequest value
     * @return MynewServiceStructVoidShipmentRequest|null
     */
    public function getVoidShipmentRequest()
    {
        return $this->voidShipmentRequest;
    }
    /**
     * Set voidShipmentRequest value
     * @param MynewServiceStructVoidShipmentRequest $_voidShipmentRequest the voidShipmentRequest
     * @return MynewServiceStructVoidShipmentRequest
     */
    public function setVoidShipmentRequest($_voidShipmentRequest)
    {
        return ($this->voidShipmentRequest = $_voidShipmentRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructVoidUPSShipment
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
