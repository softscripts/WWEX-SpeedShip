<?php
/**
 * File for class MynewServiceStructShipmentDocs

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentDocs originally named ShipmentDocs
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentDocs extends MynewServiceWsdlClass
{
    /**
     * The shipmentDoc
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentDoc
     */
    public $shipmentDoc;
    /**
     * Constructor method for ShipmentDocs
     * @see parent::__construct()
     * @param MynewServiceStructShipmentDoc $_shipmentDoc
     * @return MynewServiceStructShipmentDocs
     */
    public function __construct($_shipmentDoc = NULL)
    {
        parent::__construct(array('shipmentDoc'=>$_shipmentDoc),false);
    }
    /**
     * Get shipmentDoc value
     * @return MynewServiceStructShipmentDoc|null
     */
    public function getShipmentDoc()
    {
        return $this->shipmentDoc;
    }
    /**
     * Set shipmentDoc value
     * @param MynewServiceStructShipmentDoc $_shipmentDoc the shipmentDoc
     * @return MynewServiceStructShipmentDoc
     */
    public function setShipmentDoc($_shipmentDoc)
    {
        return ($this->shipmentDoc = $_shipmentDoc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentDocs
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
