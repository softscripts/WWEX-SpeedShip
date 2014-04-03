<?php
/**
 * File for class MynewServiceStructPackageLevelFees

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructPackageLevelFees originally named PackageLevelFees
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructPackageLevelFees extends MynewServiceWsdlClass
{
    /**
     * The packageLevelFee
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructPackageLevelFee
     */
    public $packageLevelFee;
    /**
     * The packageLevelFeesSubTotal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $packageLevelFeesSubTotal;
    /**
     * Constructor method for PackageLevelFees
     * @see parent::__construct()
     * @param MynewServiceStructPackageLevelFee $_packageLevelFee
     * @param string $_packageLevelFeesSubTotal
     * @return MynewServiceStructPackageLevelFees
     */
    public function __construct($_packageLevelFee = NULL,$_packageLevelFeesSubTotal = NULL)
    {
        parent::__construct(array('packageLevelFee'=>$_packageLevelFee,'packageLevelFeesSubTotal'=>$_packageLevelFeesSubTotal),false);
    }
    /**
     * Get packageLevelFee value
     * @return MynewServiceStructPackageLevelFee|null
     */
    public function getPackageLevelFee()
    {
        return $this->packageLevelFee;
    }
    /**
     * Set packageLevelFee value
     * @param MynewServiceStructPackageLevelFee $_packageLevelFee the packageLevelFee
     * @return MynewServiceStructPackageLevelFee
     */
    public function setPackageLevelFee($_packageLevelFee)
    {
        return ($this->packageLevelFee = $_packageLevelFee);
    }
    /**
     * Get packageLevelFeesSubTotal value
     * @return string|null
     */
    public function getPackageLevelFeesSubTotal()
    {
        return $this->packageLevelFeesSubTotal;
    }
    /**
     * Set packageLevelFeesSubTotal value
     * @param string $_packageLevelFeesSubTotal the packageLevelFeesSubTotal
     * @return string
     */
    public function setPackageLevelFeesSubTotal($_packageLevelFeesSubTotal)
    {
        return ($this->packageLevelFeesSubTotal = $_packageLevelFeesSubTotal);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructPackageLevelFees
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
