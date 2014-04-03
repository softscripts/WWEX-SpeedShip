<?php
/**
 * File for class MynewServiceStructShipRatedServiceResponse

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipRatedServiceResponse originally named shipRatedServiceResponse
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipRatedServiceResponse extends MynewServiceWsdlClass
{
    /**
     * The upsShipmentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructUPSShipmentResponse
     */
    public $upsShipmentResponse;
    /**
     * Constructor method for shipRatedServiceResponse
     * @see parent::__construct()
     * @param MynewServiceStructUPSShipmentResponse $_upsShipmentResponse
     * @return MynewServiceStructShipRatedServiceResponse
     */
    public function __construct($_upsShipmentResponse = NULL)
    {
        parent::__construct(array('upsShipmentResponse'=>$_upsShipmentResponse),false);
    }
    /**
     * Get upsShipmentResponse value
     * @return MynewServiceStructUPSShipmentResponse|null
     */
    public function getUpsShipmentResponse()
    {
        return $this->upsShipmentResponse;
    }
    /**
     * Set upsShipmentResponse value
     * @param MynewServiceStructUPSShipmentResponse $_upsShipmentResponse the upsShipmentResponse
     * @return MynewServiceStructUPSShipmentResponse
     */
    public function setUpsShipmentResponse($_upsShipmentResponse)
    {
        return ($this->upsShipmentResponse = $_upsShipmentResponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipRatedServiceResponse
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
