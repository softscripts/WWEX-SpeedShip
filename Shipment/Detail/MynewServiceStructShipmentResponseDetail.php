<?php
/**
 * File for class MynewServiceStructShipmentResponseDetail

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentResponseDetail originally named ShipmentResponseDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentResponseDetail extends MynewServiceWsdlClass
{
    /**
     * The primaryAirBillNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $primaryAirBillNumber;
    /**
     * The shipmentDocs
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentDocs
     */
    public $shipmentDocs;
    /**
     * The shipmentLabels
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentLabels
     */
    public $shipmentLabels;
    /**
     * The shipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $shipmentType;
    /**
     * The upsServiceDetails
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructUPSServiceDetails
     */
    public $upsServiceDetails;
    /**
     * Constructor method for ShipmentResponseDetail
     * @see parent::__construct()
     * @param string $_primaryAirBillNumber
     * @param MynewServiceStructShipmentDocs $_shipmentDocs
     * @param MynewServiceStructShipmentLabels $_shipmentLabels
     * @param string $_shipmentType
     * @param MynewServiceStructUPSServiceDetails $_upsServiceDetails
     * @return MynewServiceStructShipmentResponseDetail
     */
    public function __construct($_primaryAirBillNumber = NULL,$_shipmentDocs = NULL,$_shipmentLabels = NULL,$_shipmentType = NULL,$_upsServiceDetails = NULL)
    {
        parent::__construct(array('primaryAirBillNumber'=>$_primaryAirBillNumber,'shipmentDocs'=>$_shipmentDocs,'shipmentLabels'=>$_shipmentLabels,'shipmentType'=>$_shipmentType,'upsServiceDetails'=>$_upsServiceDetails),false);
    }
    /**
     * Get primaryAirBillNumber value
     * @return string|null
     */
    public function getPrimaryAirBillNumber()
    {
        return $this->primaryAirBillNumber;
    }
    /**
     * Set primaryAirBillNumber value
     * @param string $_primaryAirBillNumber the primaryAirBillNumber
     * @return string
     */
    public function setPrimaryAirBillNumber($_primaryAirBillNumber)
    {
        return ($this->primaryAirBillNumber = $_primaryAirBillNumber);
    }
    /**
     * Get shipmentDocs value
     * @return MynewServiceStructShipmentDocs|null
     */
    public function getShipmentDocs()
    {
        return $this->shipmentDocs;
    }
    /**
     * Set shipmentDocs value
     * @param MynewServiceStructShipmentDocs $_shipmentDocs the shipmentDocs
     * @return MynewServiceStructShipmentDocs
     */
    public function setShipmentDocs($_shipmentDocs)
    {
        return ($this->shipmentDocs = $_shipmentDocs);
    }
    /**
     * Get shipmentLabels value
     * @return MynewServiceStructShipmentLabels|null
     */
    public function getShipmentLabels()
    {
        return $this->shipmentLabels;
    }
    /**
     * Set shipmentLabels value
     * @param MynewServiceStructShipmentLabels $_shipmentLabels the shipmentLabels
     * @return MynewServiceStructShipmentLabels
     */
    public function setShipmentLabels($_shipmentLabels)
    {
        return ($this->shipmentLabels = $_shipmentLabels);
    }
    /**
     * Get shipmentType value
     * @return string|null
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }
    /**
     * Set shipmentType value
     * @param string $_shipmentType the shipmentType
     * @return string
     */
    public function setShipmentType($_shipmentType)
    {
        return ($this->shipmentType = $_shipmentType);
    }
    /**
     * Get upsServiceDetails value
     * @return MynewServiceStructUPSServiceDetails|null
     */
    public function getUpsServiceDetails()
    {
        return $this->upsServiceDetails;
    }
    /**
     * Set upsServiceDetails value
     * @param MynewServiceStructUPSServiceDetails $_upsServiceDetails the upsServiceDetails
     * @return MynewServiceStructUPSServiceDetails
     */
    public function setUpsServiceDetails($_upsServiceDetails)
    {
        return ($this->upsServiceDetails = $_upsServiceDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentResponseDetail
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
