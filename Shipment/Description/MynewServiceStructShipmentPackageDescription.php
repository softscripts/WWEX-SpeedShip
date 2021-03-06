<?php
/**
 * File for class MynewServiceStructShipmentPackageDescription

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPackageDescription originally named ShipmentPackageDescription
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPackageDescription extends MynewServiceWsdlClass
{
    /**
     * The DNCVIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $DNCVIndicator;
    /**
     * The descriptionOfGoods
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $descriptionOfGoods;
    /**
     * Constructor method for ShipmentPackageDescription
     * @see parent::__construct()
     * @param string $_dNCVIndicator
     * @param string $_descriptionOfGoods
     * @return MynewServiceStructShipmentPackageDescription
     */
    public function __construct($_dNCVIndicator = NULL,$_descriptionOfGoods = NULL)
    {
        parent::__construct(array('DNCVIndicator'=>$_dNCVIndicator,'descriptionOfGoods'=>$_descriptionOfGoods),false);
    }
    /**
     * Get DNCVIndicator value
     * @return string|null
     */
    public function getDNCVIndicator()
    {
        return $this->DNCVIndicator;
    }
    /**
     * Set DNCVIndicator value
     * @param string $_dNCVIndicator the DNCVIndicator
     * @return string
     */
    public function setDNCVIndicator($_dNCVIndicator)
    {
        return ($this->DNCVIndicator = $_dNCVIndicator);
    }
    /**
     * Get descriptionOfGoods value
     * @return string|null
     */
    public function getDescriptionOfGoods()
    {
        return $this->descriptionOfGoods;
    }
    /**
     * Set descriptionOfGoods value
     * @param string $_descriptionOfGoods the descriptionOfGoods
     * @return string
     */
    public function setDescriptionOfGoods($_descriptionOfGoods)
    {
        return ($this->descriptionOfGoods = $_descriptionOfGoods);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPackageDescription
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
