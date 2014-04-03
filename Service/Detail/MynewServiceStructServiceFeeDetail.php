<?php
/**
 * File for class MynewServiceStructServiceFeeDetail

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructServiceFeeDetail originally named ServiceFeeDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructServiceFeeDetail extends MynewServiceWsdlClass
{
    /**
     * The packageLevelFees
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructPackageLevelFees
     */
    public $packageLevelFees;
    /**
     * The serviceFeeGrandTotal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $serviceFeeGrandTotal;
    /**
     * The shipmentLevelFee
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructShipmentLevelFee
     */
    public $shipmentLevelFee;
    /**
     * Constructor method for ServiceFeeDetail
     * @see parent::__construct()
     * @param MynewServiceStructPackageLevelFees $_packageLevelFees
     * @param string $_serviceFeeGrandTotal
     * @param MynewServiceStructShipmentLevelFee $_shipmentLevelFee
     * @return MynewServiceStructServiceFeeDetail
     */
    public function __construct($_packageLevelFees = NULL,$_serviceFeeGrandTotal = NULL,$_shipmentLevelFee = NULL)
    {
        parent::__construct(array('packageLevelFees'=>$_packageLevelFees,'serviceFeeGrandTotal'=>$_serviceFeeGrandTotal,'shipmentLevelFee'=>$_shipmentLevelFee),false);
    }
    /**
     * Get packageLevelFees value
     * @return MynewServiceStructPackageLevelFees|null
     */
    public function getPackageLevelFees()
    {
        return $this->packageLevelFees;
    }
    /**
     * Set packageLevelFees value
     * @param MynewServiceStructPackageLevelFees $_packageLevelFees the packageLevelFees
     * @return MynewServiceStructPackageLevelFees
     */
    public function setPackageLevelFees($_packageLevelFees)
    {
        return ($this->packageLevelFees = $_packageLevelFees);
    }
    /**
     * Get serviceFeeGrandTotal value
     * @return string|null
     */
    public function getServiceFeeGrandTotal()
    {
        return $this->serviceFeeGrandTotal;
    }
    /**
     * Set serviceFeeGrandTotal value
     * @param string $_serviceFeeGrandTotal the serviceFeeGrandTotal
     * @return string
     */
    public function setServiceFeeGrandTotal($_serviceFeeGrandTotal)
    {
        return ($this->serviceFeeGrandTotal = $_serviceFeeGrandTotal);
    }
    /**
     * Get shipmentLevelFee value
     * @return MynewServiceStructShipmentLevelFee|null
     */
    public function getShipmentLevelFee()
    {
        return $this->shipmentLevelFee;
    }
    /**
     * Set shipmentLevelFee value
     * @param MynewServiceStructShipmentLevelFee $_shipmentLevelFee the shipmentLevelFee
     * @return MynewServiceStructShipmentLevelFee
     */
    public function setShipmentLevelFee($_shipmentLevelFee)
    {
        return ($this->shipmentLevelFee = $_shipmentLevelFee);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructServiceFeeDetail
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
