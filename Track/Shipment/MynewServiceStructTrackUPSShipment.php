<?php
/**
 * File for class MynewServiceStructTrackUPSShipment

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructTrackUPSShipment originally named trackUPSShipment
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructTrackUPSShipment extends MynewServiceWsdlClass
{
    /**
     * The trackShipmentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructTrackShipmentRequest
     */
    public $trackShipmentRequest;
    /**
     * Constructor method for trackUPSShipment
     * @see parent::__construct()
     * @param MynewServiceStructTrackShipmentRequest $_trackShipmentRequest
     * @return MynewServiceStructTrackUPSShipment
     */
    public function __construct($_trackShipmentRequest = NULL)
    {
        parent::__construct(array('trackShipmentRequest'=>$_trackShipmentRequest),false);
    }
    /**
     * Get trackShipmentRequest value
     * @return MynewServiceStructTrackShipmentRequest|null
     */
    public function getTrackShipmentRequest()
    {
        return $this->trackShipmentRequest;
    }
    /**
     * Set trackShipmentRequest value
     * @param MynewServiceStructTrackShipmentRequest $_trackShipmentRequest the trackShipmentRequest
     * @return MynewServiceStructTrackShipmentRequest
     */
    public function setTrackShipmentRequest($_trackShipmentRequest)
    {
        return ($this->trackShipmentRequest = $_trackShipmentRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructTrackUPSShipment
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
