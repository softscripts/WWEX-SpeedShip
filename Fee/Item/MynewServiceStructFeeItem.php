<?php
/**
 * File for class MynewServiceStructFeeItem

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructFeeItem originally named FeeItem
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructFeeItem extends MynewServiceWsdlClass
{
    /**
     * The feeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $feeAmount;
    /**
     * The feeDesc
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $feeDesc;
    /**
     * Constructor method for FeeItem
     * @see parent::__construct()
     * @param string $_feeAmount
     * @param string $_feeDesc
     * @return MynewServiceStructFeeItem
     */
    public function __construct($_feeAmount = NULL,$_feeDesc = NULL)
    {
        parent::__construct(array('feeAmount'=>$_feeAmount,'feeDesc'=>$_feeDesc),false);
    }
    /**
     * Get feeAmount value
     * @return string|null
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param string $_feeAmount the feeAmount
     * @return string
     */
    public function setFeeAmount($_feeAmount)
    {
        return ($this->feeAmount = $_feeAmount);
    }
    /**
     * Get feeDesc value
     * @return string|null
     */
    public function getFeeDesc()
    {
        return $this->feeDesc;
    }
    /**
     * Set feeDesc value
     * @param string $_feeDesc the feeDesc
     * @return string
     */
    public function setFeeDesc($_feeDesc)
    {
        return ($this->feeDesc = $_feeDesc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructFeeItem
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
