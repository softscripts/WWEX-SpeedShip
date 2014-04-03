<?php
/**
 * File for class MynewServiceStructShipmentReferences

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentReferences originally named ShipmentReferences
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentReferences extends MynewServiceWsdlClass
{
    /**
     * The shipmentReference
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentReference
     */
    public $shipmentReference;
    /**
     * Constructor method for ShipmentReferences
     * @see parent::__construct()
     * @param MynewServiceStructShipmentReference $_shipmentReference
     * @return MynewServiceStructShipmentReferences
     */
    public function __construct($_shipmentReference = NULL)
    {
        parent::__construct(array('shipmentReference'=>$_shipmentReference),false);
    }
    /**
     * Get shipmentReference value
     * @return MynewServiceStructShipmentReference|null
     */
    public function getShipmentReference()
    {
        return $this->shipmentReference;
    }
    /**
     * Set shipmentReference value
     * @param MynewServiceStructShipmentReference $_shipmentReference the shipmentReference
     * @return MynewServiceStructShipmentReference
     */
    public function setShipmentReference($_shipmentReference)
    {
        return ($this->shipmentReference = $_shipmentReference);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentReferences
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
