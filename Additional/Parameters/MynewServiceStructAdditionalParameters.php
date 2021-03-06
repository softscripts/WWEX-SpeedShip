<?php
/**
 * File for class MynewServiceStructAdditionalParameters
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructAdditionalParameters originally named AdditionalParameters
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructAdditionalParameters extends MynewServiceWsdlClass
{
    /**
     * The shipmentParameter
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentParameter
     */
    public $shipmentParameter;
    /**
     * Constructor method for AdditionalParameters
     * @see parent::__construct()
     * @param MynewServiceStructShipmentParameter $_shipmentParameter
     * @return MynewServiceStructAdditionalParameters
     */
    public function __construct($_shipmentParameter = NULL)
    {
        parent::__construct(array('shipmentParameter'=>$_shipmentParameter),false);
    }
    /**
     * Get shipmentParameter value
     * @return MynewServiceStructShipmentParameter|null
     */
    public function getShipmentParameter()
    {
        return $this->shipmentParameter;
    }
    /**
     * Set shipmentParameter value
     * @param MynewServiceStructShipmentParameter $_shipmentParameter the shipmentParameter
     * @return MynewServiceStructShipmentParameter
     */
    public function setShipmentParameter($_shipmentParameter)
    {
        return ($this->shipmentParameter = $_shipmentParameter);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructAdditionalParameters
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
