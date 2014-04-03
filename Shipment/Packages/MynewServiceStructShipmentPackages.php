<?php
/**
 * File for class MynewServiceStructShipmentPackages

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPackages originally named ShipmentPackages
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPackages extends MynewServiceWsdlClass
{
    /**
     * The shipmentPackage
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackage
     */
    public $shipmentPackage;
    /**
     * Constructor method for ShipmentPackages
     * @see parent::__construct()
     * @param MynewServiceStructShipmentPackage $_shipmentPackage
     * @return MynewServiceStructShipmentPackages
     */
    public function __construct($_shipmentPackage = NULL)
    {
        parent::__construct(array('shipmentPackage'=>$_shipmentPackage),false);
    }
    /**
     * Get shipmentPackage value
     * @return MynewServiceStructShipmentPackage|null
     */
    public function getShipmentPackage()
    {
        return $this->shipmentPackage;
    }
    /**
     * Set shipmentPackage value
     * @param MynewServiceStructShipmentPackage $_shipmentPackage the shipmentPackage
     * @return MynewServiceStructShipmentPackage
     */
    public function setShipmentPackage($_shipmentPackage)
    {
        return ($this->shipmentPackage = $_shipmentPackage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPackages
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
