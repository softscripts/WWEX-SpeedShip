<?php
/**
 * File for class MynewServiceStructTrackUPSShipmentResponse

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructTrackUPSShipmentResponse originally named trackUPSShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructTrackUPSShipmentResponse extends MynewServiceWsdlClass
{
    /**
     * The trackShipmentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructTrackShipmentResponse
     */
    public $trackShipmentResponse;
    /**
     * Constructor method for trackUPSShipmentResponse
     * @see parent::__construct()
     * @param MynewServiceStructTrackShipmentResponse $_trackShipmentResponse
     * @return MynewServiceStructTrackUPSShipmentResponse
     */
    public function __construct($_trackShipmentResponse = NULL)
    {
        parent::__construct(array('trackShipmentResponse'=>$_trackShipmentResponse),false);
    }
    /**
     * Get trackShipmentResponse value
     * @return MynewServiceStructTrackShipmentResponse|null
     */
    public function getTrackShipmentResponse()
    {
        return $this->trackShipmentResponse;
    }
    /**
     * Set trackShipmentResponse value
     * @param MynewServiceStructTrackShipmentResponse $_trackShipmentResponse the trackShipmentResponse
     * @return MynewServiceStructTrackShipmentResponse
     */
    public function setTrackShipmentResponse($_trackShipmentResponse)
    {
        return ($this->trackShipmentResponse = $_trackShipmentResponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructTrackUPSShipmentResponse
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
