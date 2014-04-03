<?php
/**
 * File for class MynewServiceStructShipmentPackageAdditionalInfo

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPackageAdditionalInfo originally named ShipmentPackageAdditionalInfo
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPackageAdditionalInfo extends MynewServiceWsdlClass
{
    /**
     * The shipmentPackageDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentPackageDescriptions
     */
    public $shipmentPackageDescriptions;
    /**
     * The shipmentReferences
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentReferences
     */
    public $shipmentReferences;
    /**
     * Constructor method for ShipmentPackageAdditionalInfo
     * @see parent::__construct()
     * @param MynewServiceStructShipmentPackageDescriptions $_shipmentPackageDescriptions
     * @param MynewServiceStructShipmentReferences $_shipmentReferences
     * @return MynewServiceStructShipmentPackageAdditionalInfo
     */
    public function __construct($_shipmentPackageDescriptions = NULL,$_shipmentReferences = NULL)
    {
        parent::__construct(array('shipmentPackageDescriptions'=>$_shipmentPackageDescriptions,'shipmentReferences'=>$_shipmentReferences),false);
    }
    /**
     * Get shipmentPackageDescriptions value
     * @return MynewServiceStructShipmentPackageDescriptions|null
     */
    public function getShipmentPackageDescriptions()
    {
        return $this->shipmentPackageDescriptions;
    }
    /**
     * Set shipmentPackageDescriptions value
     * @param MynewServiceStructShipmentPackageDescriptions $_shipmentPackageDescriptions the shipmentPackageDescriptions
     * @return MynewServiceStructShipmentPackageDescriptions
     */
    public function setShipmentPackageDescriptions($_shipmentPackageDescriptions)
    {
        return ($this->shipmentPackageDescriptions = $_shipmentPackageDescriptions);
    }
    /**
     * Get shipmentReferences value
     * @return MynewServiceStructShipmentReferences|null
     */
    public function getShipmentReferences()
    {
        return $this->shipmentReferences;
    }
    /**
     * Set shipmentReferences value
     * @param MynewServiceStructShipmentReferences $_shipmentReferences the shipmentReferences
     * @return MynewServiceStructShipmentReferences
     */
    public function setShipmentReferences($_shipmentReferences)
    {
        return ($this->shipmentReferences = $_shipmentReferences);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPackageAdditionalInfo
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
