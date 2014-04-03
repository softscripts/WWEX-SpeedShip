<?php
/**
 * File for class MynewServiceStructVoidUPSShipmentResponse

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructVoidUPSShipmentResponse originally named voidUPSShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructVoidUPSShipmentResponse extends MynewServiceWsdlClass
{
    /**
     * The voidShipmentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructVoidShipmentResponse
     */
    public $voidShipmentResponse;
    /**
     * Constructor method for voidUPSShipmentResponse
     * @see parent::__construct()
     * @param MynewServiceStructVoidShipmentResponse $_voidShipmentResponse
     * @return MynewServiceStructVoidUPSShipmentResponse
     */
    public function __construct($_voidShipmentResponse = NULL)
    {
        parent::__construct(array('voidShipmentResponse'=>$_voidShipmentResponse),false);
    }
    /**
     * Get voidShipmentResponse value
     * @return MynewServiceStructVoidShipmentResponse|null
     */
    public function getVoidShipmentResponse()
    {
        return $this->voidShipmentResponse;
    }
    /**
     * Set voidShipmentResponse value
     * @param MynewServiceStructVoidShipmentResponse $_voidShipmentResponse the voidShipmentResponse
     * @return MynewServiceStructVoidShipmentResponse
     */
    public function setVoidShipmentResponse($_voidShipmentResponse)
    {
        return ($this->voidShipmentResponse = $_voidShipmentResponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructVoidUPSShipmentResponse
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
