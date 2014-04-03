<?php
/**
 * File for class MynewServiceStructShipmentVoidDetail

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentVoidDetail originally named ShipmentVoidDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentVoidDetail extends MynewServiceWsdlClass
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentNumber;
    /**
     * The statusCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $statusCode;
    /**
     * The statusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $statusDescription;
    /**
     * The voidDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $voidDescription;
    /**
     * Constructor method for ShipmentVoidDetail
     * @see parent::__construct()
     * @param string $_shipmentNumber
     * @param string $_statusCode
     * @param string $_statusDescription
     * @param string $_voidDescription
     * @return MynewServiceStructShipmentVoidDetail
     */
    public function __construct($_shipmentNumber = NULL,$_statusCode = NULL,$_statusDescription = NULL,$_voidDescription = NULL)
    {
        parent::__construct(array('shipmentNumber'=>$_shipmentNumber,'statusCode'=>$_statusCode,'statusDescription'=>$_statusDescription,'voidDescription'=>$_voidDescription),false);
    }
    /**
     * Get shipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $_shipmentNumber the shipmentNumber
     * @return string
     */
    public function setShipmentNumber($_shipmentNumber)
    {
        return ($this->shipmentNumber = $_shipmentNumber);
    }
    /**
     * Get statusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param string $_statusCode the statusCode
     * @return string
     */
    public function setStatusCode($_statusCode)
    {
        return ($this->statusCode = $_statusCode);
    }
    /**
     * Get statusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }
    /**
     * Set statusDescription value
     * @param string $_statusDescription the statusDescription
     * @return string
     */
    public function setStatusDescription($_statusDescription)
    {
        return ($this->statusDescription = $_statusDescription);
    }
    /**
     * Get voidDescription value
     * @return string|null
     */
    public function getVoidDescription()
    {
        return $this->voidDescription;
    }
    /**
     * Set voidDescription value
     * @param string $_voidDescription the voidDescription
     * @return string
     */
    public function setVoidDescription($_voidDescription)
    {
        return ($this->voidDescription = $_voidDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentVoidDetail
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
