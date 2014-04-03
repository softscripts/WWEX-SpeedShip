<?php
/**
 * File for class MynewServiceStructShipmentPackageDescriptions

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPackageDescriptions originally named ShipmentPackageDescriptions
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPackageDescriptions extends MynewServiceWsdlClass
{
    /**
     * The shipmentPackageDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackageDescription
     */
    public $shipmentPackageDescription;
    /**
     * Constructor method for ShipmentPackageDescriptions
     * @see parent::__construct()
     * @param MynewServiceStructShipmentPackageDescription $_shipmentPackageDescription
     * @return MynewServiceStructShipmentPackageDescriptions
     */
    public function __construct($_shipmentPackageDescription = NULL)
    {
        parent::__construct(array('shipmentPackageDescription'=>$_shipmentPackageDescription),false);
    }
    /**
     * Get shipmentPackageDescription value
     * @return MynewServiceStructShipmentPackageDescription|null
     */
    public function getShipmentPackageDescription()
    {
        return $this->shipmentPackageDescription;
    }
    /**
     * Set shipmentPackageDescription value
     * @param MynewServiceStructShipmentPackageDescription $_shipmentPackageDescription the shipmentPackageDescription
     * @return MynewServiceStructShipmentPackageDescription
     */
    public function setShipmentPackageDescription($_shipmentPackageDescription)
    {
        return ($this->shipmentPackageDescription = $_shipmentPackageDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPackageDescriptions
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
