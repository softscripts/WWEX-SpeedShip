<?php
/**
 * File for class MynewServiceStructShipmentLabel

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentLabel originally named ShipmentLabel
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentLabel extends MynewServiceWsdlClass
{
    /**
     * The airBillNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $airBillNumber;
    /**
     * The imageFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $imageFormat;
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $packageNumber;
    /**
     * The shipmentLabelContent
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentLabelContent;
    /**
     * Constructor method for ShipmentLabel
     * @see parent::__construct()
     * @param string $_airBillNumber
     * @param string $_imageFormat
     * @param string $_packageNumber
     * @param string $_shipmentLabelContent
     * @return MynewServiceStructShipmentLabel
     */
    public function __construct($_airBillNumber = NULL,$_imageFormat = NULL,$_packageNumber = NULL,$_shipmentLabelContent = NULL)
    {
        parent::__construct(array('airBillNumber'=>$_airBillNumber,'imageFormat'=>$_imageFormat,'packageNumber'=>$_packageNumber,'shipmentLabelContent'=>$_shipmentLabelContent),false);
    }
    /**
     * Get airBillNumber value
     * @return string|null
     */
    public function getAirBillNumber()
    {
        return $this->airBillNumber;
    }
    /**
     * Set airBillNumber value
     * @param string $_airBillNumber the airBillNumber
     * @return string
     */
    public function setAirBillNumber($_airBillNumber)
    {
        return ($this->airBillNumber = $_airBillNumber);
    }
    /**
     * Get imageFormat value
     * @return string|null
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }
    /**
     * Set imageFormat value
     * @param string $_imageFormat the imageFormat
     * @return string
     */
    public function setImageFormat($_imageFormat)
    {
        return ($this->imageFormat = $_imageFormat);
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
     * Get shipmentLabelContent value
     * @return string|null
     */
    public function getShipmentLabelContent()
    {
        return $this->shipmentLabelContent;
    }
    /**
     * Set shipmentLabelContent value
     * @param string $_shipmentLabelContent the shipmentLabelContent
     * @return string
     */
    public function setShipmentLabelContent($_shipmentLabelContent)
    {
        return ($this->shipmentLabelContent = $_shipmentLabelContent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentLabel
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
