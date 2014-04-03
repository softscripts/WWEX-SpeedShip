<?php
/**
 * File for class MynewServiceStructTrackShipmentResponse

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructTrackShipmentResponse originally named TrackShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructTrackShipmentResponse extends MynewServiceWsdlClass
{
    /**
     * The serviceResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructResponseHeader
     */
    public $serviceResponse;
    /**
     * The shipmentTrackingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentTrackingDetails
     */
    public $shipmentTrackingDetails;
    /**
     * Constructor method for TrackShipmentResponse
     * @see parent::__construct()
     * @param MynewServiceStructResponseHeader $_serviceResponse
     * @param MynewServiceStructShipmentTrackingDetails $_shipmentTrackingDetails
     * @return MynewServiceStructTrackShipmentResponse
     */
    public function __construct($_serviceResponse = NULL,$_shipmentTrackingDetails = NULL)
    {
        parent::__construct(array('serviceResponse'=>$_serviceResponse,'shipmentTrackingDetails'=>$_shipmentTrackingDetails),false);
    }
    /**
     * Get serviceResponse value
     * @return MynewServiceStructResponseHeader|null
     */
    public function getServiceResponse()
    {
        return $this->serviceResponse;
    }
    /**
     * Set serviceResponse value
     * @param MynewServiceStructResponseHeader $_serviceResponse the serviceResponse
     * @return MynewServiceStructResponseHeader
     */
    public function setServiceResponse($_serviceResponse)
    {
        return ($this->serviceResponse = $_serviceResponse);
    }
    /**
     * Get shipmentTrackingDetails value
     * @return MynewServiceStructShipmentTrackingDetails|null
     */
    public function getShipmentTrackingDetails()
    {
        return $this->shipmentTrackingDetails;
    }
    /**
     * Set shipmentTrackingDetails value
     * @param MynewServiceStructShipmentTrackingDetails $_shipmentTrackingDetails the shipmentTrackingDetails
     * @return MynewServiceStructShipmentTrackingDetails
     */
    public function setShipmentTrackingDetails($_shipmentTrackingDetails)
    {
        return ($this->shipmentTrackingDetails = $_shipmentTrackingDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructTrackShipmentResponse
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
