<?php
/**
 * File for class MynewServiceStructShipmentPackagesWithAddInfo

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPackagesWithAddInfo originally named ShipmentPackagesWithAddInfo
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPackagesWithAddInfo extends MynewServiceWsdlClass
{
    /**
     * The shipmentPackageWithAddInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackageWithAddInfo
     */
    public $shipmentPackageWithAddInfo;
    /**
     * Constructor method for ShipmentPackagesWithAddInfo
     * @see parent::__construct()
     * @param MynewServiceStructShipmentPackageWithAddInfo $_shipmentPackageWithAddInfo
     * @return MynewServiceStructShipmentPackagesWithAddInfo
     */
    public function __construct($_shipmentPackageWithAddInfo = NULL)
    {
        parent::__construct(array('shipmentPackageWithAddInfo'=>$_shipmentPackageWithAddInfo),false);
    }
    /**
     * Get shipmentPackageWithAddInfo value
     * @return MynewServiceStructShipmentPackageWithAddInfo|null
     */
    public function getShipmentPackageWithAddInfo()
    {
        return $this->shipmentPackageWithAddInfo;
    }
    /**
     * Set shipmentPackageWithAddInfo value
     * @param MynewServiceStructShipmentPackageWithAddInfo $_shipmentPackageWithAddInfo the shipmentPackageWithAddInfo
     * @return MynewServiceStructShipmentPackageWithAddInfo
     */
    public function setShipmentPackageWithAddInfo($_shipmentPackageWithAddInfo)
    {
        return ($this->shipmentPackageWithAddInfo = $_shipmentPackageWithAddInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPackagesWithAddInfo
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
