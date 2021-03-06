<?php
/**
 * File for class MynewServiceStructShipmentLabels

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentLabels originally named ShipmentLabels
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentLabels extends MynewServiceWsdlClass
{
    /**
     * The shipmentLabel
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentLabel
     */
    public $shipmentLabel;
    /**
     * Constructor method for ShipmentLabels
     * @see parent::__construct()
     * @param MynewServiceStructShipmentLabel $_shipmentLabel
     * @return MynewServiceStructShipmentLabels
     */
    public function __construct($_shipmentLabel = NULL)
    {
        parent::__construct(array('shipmentLabel'=>$_shipmentLabel),false);
    }
    /**
     * Get shipmentLabel value
     * @return MynewServiceStructShipmentLabel|null
     */
    public function getShipmentLabel()
    {
        return $this->shipmentLabel;
    }
    /**
     * Set shipmentLabel value
     * @param MynewServiceStructShipmentLabel $_shipmentLabel the shipmentLabel
     * @return MynewServiceStructShipmentLabel
     */
    public function setShipmentLabel($_shipmentLabel)
    {
        return ($this->shipmentLabel = $_shipmentLabel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentLabels
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
