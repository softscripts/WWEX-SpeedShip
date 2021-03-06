<?php
/**
 * File for class MynewServiceStructTrackShipmentRequest

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructTrackShipmentRequest originally named TrackShipmentRequest
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructTrackShipmentRequest extends MynewServiceWsdlClass
{
    /**
     * The shipmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentNumbers
     */
    public $shipmentNumbers;
    /**
     * Constructor method for TrackShipmentRequest
     * @see parent::__construct()
     * @param MynewServiceStructShipmentNumbers $_shipmentNumbers
     * @return MynewServiceStructTrackShipmentRequest
     */
    public function __construct($_shipmentNumbers = NULL)
    {
        parent::__construct(array('shipmentNumbers'=>$_shipmentNumbers),false);
    }
    /**
     * Get shipmentNumbers value
     * @return MynewServiceStructShipmentNumbers|null
     */
    public function getShipmentNumbers()
    {
        return $this->shipmentNumbers;
    }
    /**
     * Set shipmentNumbers value
     * @param MynewServiceStructShipmentNumbers $_shipmentNumbers the shipmentNumbers
     * @return MynewServiceStructShipmentNumbers
     */
    public function setShipmentNumbers($_shipmentNumbers)
    {
        return ($this->shipmentNumbers = $_shipmentNumbers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructTrackShipmentRequest
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
