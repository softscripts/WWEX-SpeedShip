<?php
/**
 * File for class MynewServiceStructShipmentLevelFee

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentLevelFee originally named ShipmentLevelFee
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentLevelFee extends MynewServiceWsdlClass
{
    /**
     * The feeItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructFeeItems
     */
    public $feeItems;
    /**
     * The shipmentLevelFeeSubTotal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentLevelFeeSubTotal;
    /**
     * Constructor method for ShipmentLevelFee
     * @see parent::__construct()
     * @param MynewServiceStructFeeItems $_feeItems
     * @param string $_shipmentLevelFeeSubTotal
     * @return MynewServiceStructShipmentLevelFee
     */
    public function __construct($_feeItems = NULL,$_shipmentLevelFeeSubTotal = NULL)
    {
        parent::__construct(array('feeItems'=>$_feeItems,'shipmentLevelFeeSubTotal'=>$_shipmentLevelFeeSubTotal),false);
    }
    /**
     * Get feeItems value
     * @return MynewServiceStructFeeItems|null
     */
    public function getFeeItems()
    {
        return $this->feeItems;
    }
    /**
     * Set feeItems value
     * @param MynewServiceStructFeeItems $_feeItems the feeItems
     * @return MynewServiceStructFeeItems
     */
    public function setFeeItems($_feeItems)
    {
        return ($this->feeItems = $_feeItems);
    }
    /**
     * Get shipmentLevelFeeSubTotal value
     * @return string|null
     */
    public function getShipmentLevelFeeSubTotal()
    {
        return $this->shipmentLevelFeeSubTotal;
    }
    /**
     * Set shipmentLevelFeeSubTotal value
     * @param string $_shipmentLevelFeeSubTotal the shipmentLevelFeeSubTotal
     * @return string
     */
    public function setShipmentLevelFeeSubTotal($_shipmentLevelFeeSubTotal)
    {
        return ($this->shipmentLevelFeeSubTotal = $_shipmentLevelFeeSubTotal);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentLevelFee
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
