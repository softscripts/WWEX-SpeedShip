<?php
/**
 * File for class MynewServiceStructShipRatedService

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipRatedService originally named shipRatedService
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipRatedService extends MynewServiceWsdlClass
{
    /**
     * The shipRatedServiceRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipRatedServiceRequest
     */
    public $shipRatedServiceRequest;
    /**
     * Constructor method for shipRatedService
     * @see parent::__construct()
     * @param MynewServiceStructShipRatedServiceRequest $_shipRatedServiceRequest
     * @return MynewServiceStructShipRatedService
     */
    public function __construct($_shipRatedServiceRequest = NULL)
    {
        parent::__construct(array('shipRatedServiceRequest'=>$_shipRatedServiceRequest),false);
    }
    /**
     * Get shipRatedServiceRequest value
     * @return MynewServiceStructShipRatedServiceRequest|null
     */
    public function getShipRatedServiceRequest()
    {
        return $this->shipRatedServiceRequest;
    }
    /**
     * Set shipRatedServiceRequest value
     * @param MynewServiceStructShipRatedServiceRequest $_shipRatedServiceRequest the shipRatedServiceRequest
     * @return MynewServiceStructShipRatedServiceRequest
     */
    public function setShipRatedServiceRequest($_shipRatedServiceRequest)
    {
        return ($this->shipRatedServiceRequest = $_shipRatedServiceRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipRatedService
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
