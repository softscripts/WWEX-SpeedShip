<?php
/**
 * File for class MynewServiceStructShipmentResponseDetails

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentResponseDetails originally named ShipmentResponseDetails
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentResponseDetails extends MynewServiceWsdlClass
{
    /**
     * The shipmentResponseDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentResponseDetail
     */
    public $shipmentResponseDetail;
    /**
     * Constructor method for ShipmentResponseDetails
     * @see parent::__construct()
     * @param MynewServiceStructShipmentResponseDetail $_shipmentResponseDetail
     * @return MynewServiceStructShipmentResponseDetails
     */
    public function __construct($_shipmentResponseDetail = NULL)
    {
        parent::__construct(array('shipmentResponseDetail'=>$_shipmentResponseDetail),false);
    }
    /**
     * Get shipmentResponseDetail value
     * @return MynewServiceStructShipmentResponseDetail|null
     */
    public function getShipmentResponseDetail()
    {
        return $this->shipmentResponseDetail;
    }
    /**
     * Set shipmentResponseDetail value
     * @param MynewServiceStructShipmentResponseDetail $_shipmentResponseDetail the shipmentResponseDetail
     * @return MynewServiceStructShipmentResponseDetail
     */
    public function setShipmentResponseDetail($_shipmentResponseDetail)
    {
        return ($this->shipmentResponseDetail = $_shipmentResponseDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentResponseDetails
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
