<?php
/**
 * File for class MynewServiceStructPackageLevelFee

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructPackageLevelFee originally named PackageLevelFee
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructPackageLevelFee extends MynewServiceWsdlClass
{
    /**
     * The feeItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructFeeItems
     */
    public $feeItems;
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $packageNumber;
    /**
     * The totalFeePerPackageLevel
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $totalFeePerPackageLevel;
    /**
     * Constructor method for PackageLevelFee
     * @see parent::__construct()
     * @param MynewServiceStructFeeItems $_feeItems
     * @param string $_packageNumber
     * @param string $_totalFeePerPackageLevel
     * @return MynewServiceStructPackageLevelFee
     */
    public function __construct($_feeItems = NULL,$_packageNumber = NULL,$_totalFeePerPackageLevel = NULL)
    {
        parent::__construct(array('feeItems'=>$_feeItems,'packageNumber'=>$_packageNumber,'totalFeePerPackageLevel'=>$_totalFeePerPackageLevel),false);
    }
    /**
     * Get feeItems value
     * @return MynewServiceStructFeeItems|null
     */
    public function getFeeItems()
    {
        return $this->feeItems;
    }
    /**
     * Set feeItems value
     * @param MynewServiceStructFeeItems $_feeItems the feeItems
     * @return MynewServiceStructFeeItems
     */
    public function setFeeItems($_feeItems)
    {
        return ($this->feeItems = $_feeItems);
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
     * Get totalFeePerPackageLevel value
     * @return string|null
     */
    public function getTotalFeePerPackageLevel()
    {
        return $this->totalFeePerPackageLevel;
    }
    /**
     * Set totalFeePerPackageLevel value
     * @param string $_totalFeePerPackageLevel the totalFeePerPackageLevel
     * @return string
     */
    public function setTotalFeePerPackageLevel($_totalFeePerPackageLevel)
    {
        return ($this->totalFeePerPackageLevel = $_totalFeePerPackageLevel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructPackageLevelFee
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
