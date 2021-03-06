<?php
/**
 * File for class MynewServiceStructShipmentPackageWithAddInfo

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPackageWithAddInfo originally named ShipmentPackageWithAddInfo
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPackageWithAddInfo extends MynewServiceWsdlClass
{
    /**
     * The shipmentPackageAdditionalInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackageAdditionalInfo
     */
    public $shipmentPackageAdditionalInfo;
    /**
     * The shipmentPackageInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackage
     */
    public $shipmentPackageInfo;
    /**
     * Constructor method for ShipmentPackageWithAddInfo
     * @see parent::__construct()
     * @param MynewServiceStructShipmentPackageAdditionalInfo $_shipmentPackageAdditionalInfo
     * @param MynewServiceStructShipmentPackage $_shipmentPackageInfo
     * @return MynewServiceStructShipmentPackageWithAddInfo
     */
    public function __construct($_shipmentPackageAdditionalInfo = NULL,$_shipmentPackageInfo = NULL)
    {
        parent::__construct(array('shipmentPackageAdditionalInfo'=>$_shipmentPackageAdditionalInfo,'shipmentPackageInfo'=>$_shipmentPackageInfo),false);
    }
    /**
     * Get shipmentPackageAdditionalInfo value
     * @return MynewServiceStructShipmentPackageAdditionalInfo|null
     */
    public function getShipmentPackageAdditionalInfo()
    {
        return $this->shipmentPackageAdditionalInfo;
    }
    /**
     * Set shipmentPackageAdditionalInfo value
     * @param MynewServiceStructShipmentPackageAdditionalInfo $_shipmentPackageAdditionalInfo the shipmentPackageAdditionalInfo
     * @return MynewServiceStructShipmentPackageAdditionalInfo
     */
    public function setShipmentPackageAdditionalInfo($_shipmentPackageAdditionalInfo)
    {
        return ($this->shipmentPackageAdditionalInfo = $_shipmentPackageAdditionalInfo);
    }
    /**
     * Get shipmentPackageInfo value
     * @return MynewServiceStructShipmentPackage|null
     */
    public function getShipmentPackageInfo()
    {
        return $this->shipmentPackageInfo;
    }
    /**
     * Set shipmentPackageInfo value
     * @param MynewServiceStructShipmentPackage $_shipmentPackageInfo the shipmentPackageInfo
     * @return MynewServiceStructShipmentPackage
     */
    public function setShipmentPackageInfo($_shipmentPackageInfo)
    {
        return ($this->shipmentPackageInfo = $_shipmentPackageInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPackageWithAddInfo
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
