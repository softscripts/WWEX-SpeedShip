<?php
/**
 * File for class MynewServiceStructShipmentReference

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentReference originally named ShipmentReference
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentReference extends MynewServiceWsdlClass
{
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $packageNumber;
    /**
     * The shipmentReference1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentReference1;
    /**
     * The shipmentReference2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentReference2;
    /**
     * The shipmentReferenceBarcode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentReferenceBarcode;
    /**
     * Constructor method for ShipmentReference
     * @see parent::__construct()
     * @param string $_packageNumber
     * @param string $_shipmentReference1
     * @param string $_shipmentReference2
     * @param string $_shipmentReferenceBarcode
     * @return MynewServiceStructShipmentReference
     */
    public function __construct($_packageNumber = NULL,$_shipmentReference1 = NULL,$_shipmentReference2 = NULL,$_shipmentReferenceBarcode = NULL)
    {
        parent::__construct(array('packageNumber'=>$_packageNumber,'shipmentReference1'=>$_shipmentReference1,'shipmentReference2'=>$_shipmentReference2,'shipmentReferenceBarcode'=>$_shipmentReferenceBarcode),false);
    }
    /**
     * Get packageNumber value
     * @return string|null
     */
    public function getPackageNumber()
    {
        return $this->packageNumber;
    }
    /**
     * Set packageNumber value
     * @param string $_packageNumber the packageNumber
     * @return string
     */
    public function setPackageNumber($_packageNumber)
    {
        return ($this->packageNumber = $_packageNumber);
    }
    /**
     * Get shipmentReference1 value
     * @return string|null
     */
    public function getShipmentReference1()
    {
        return $this->shipmentReference1;
    }
    /**
     * Set shipmentReference1 value
     * @param string $_shipmentReference1 the shipmentReference1
     * @return string
     */
    public function setShipmentReference1($_shipmentReference1)
    {
        return ($this->shipmentReference1 = $_shipmentReference1);
    }
    /**
     * Get shipmentReference2 value
     * @return string|null
     */
    public function getShipmentReference2()
    {
        return $this->shipmentReference2;
    }
    /**
     * Set shipmentReference2 value
     * @param string $_shipmentReference2 the shipmentReference2
     * @return string
     */
    public function setShipmentReference2($_shipmentReference2)
    {
        return ($this->shipmentReference2 = $_shipmentReference2);
    }
    /**
     * Get shipmentReferenceBarcode value
     * @return string|null
     */
    public function getShipmentReferenceBarcode()
    {
        return $this->shipmentReferenceBarcode;
    }
    /**
     * Set shipmentReferenceBarcode value
     * @param string $_shipmentReferenceBarcode the shipmentReferenceBarcode
     * @return string
     */
    public function setShipmentReferenceBarcode($_shipmentReferenceBarcode)
    {
        return ($this->shipmentReferenceBarcode = $_shipmentReferenceBarcode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentReference
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
