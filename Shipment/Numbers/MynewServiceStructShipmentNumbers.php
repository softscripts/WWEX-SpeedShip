<?php
/**
 * File for class MynewServiceStructShipmentNumbers

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentNumbers originally named ShipmentNumbers
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentNumbers extends MynewServiceWsdlClass
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentNumber;
    /**
     * Constructor method for ShipmentNumbers
     * @see parent::__construct()
     * @param string $_shipmentNumber
     * @return MynewServiceStructShipmentNumbers
     */
    public function __construct($_shipmentNumber = NULL)
    {
        parent::__construct(array('shipmentNumber'=>$_shipmentNumber),false);
    }
    /**
     * Get shipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $_shipmentNumber the shipmentNumber
     * @return string
     */
    public function setShipmentNumber($_shipmentNumber)
    {
        return ($this->shipmentNumber = $_shipmentNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentNumbers
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
