<?php
/**
 * File for class MynewServiceStructBillDutiesAndTaxesToDetail
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructBillDutiesAndTaxesToDetail originally named BillDutiesAndTaxesToDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructBillDutiesAndTaxesToDetail extends MynewServiceWsdlClass
{
    /**
     * The billDutiesAndTaxesToInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructBillDutiesAndTaxesToInfo
     */
    public $billDutiesAndTaxesToInfo;
    /**
     * The billDutiesAndTaxesToOption
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $billDutiesAndTaxesToOption;
    /**
     * Constructor method for BillDutiesAndTaxesToDetail
     * @see parent::__construct()
     * @param MynewServiceStructBillDutiesAndTaxesToInfo $_billDutiesAndTaxesToInfo
     * @param string $_billDutiesAndTaxesToOption
     * @return MynewServiceStructBillDutiesAndTaxesToDetail
     */
    public function __construct($_billDutiesAndTaxesToInfo = NULL,$_billDutiesAndTaxesToOption = NULL)
    {
        parent::__construct(array('billDutiesAndTaxesToInfo'=>$_billDutiesAndTaxesToInfo,'billDutiesAndTaxesToOption'=>$_billDutiesAndTaxesToOption),false);
    }
    /**
     * Get billDutiesAndTaxesToInfo value
     * @return MynewServiceStructBillDutiesAndTaxesToInfo|null
     */
    public function getBillDutiesAndTaxesToInfo()
    {
        return $this->billDutiesAndTaxesToInfo;
    }
    /**
     * Set billDutiesAndTaxesToInfo value
     * @param MynewServiceStructBillDutiesAndTaxesToInfo $_billDutiesAndTaxesToInfo the billDutiesAndTaxesToInfo
     * @return MynewServiceStructBillDutiesAndTaxesToInfo
     */
    public function setBillDutiesAndTaxesToInfo($_billDutiesAndTaxesToInfo)
    {
        return ($this->billDutiesAndTaxesToInfo = $_billDutiesAndTaxesToInfo);
    }
    /**
     * Get billDutiesAndTaxesToOption value
     * @return string|null
     */
    public function getBillDutiesAndTaxesToOption()
    {
        return $this->billDutiesAndTaxesToOption;
    }
    /**
     * Set billDutiesAndTaxesToOption value
     * @param string $_billDutiesAndTaxesToOption the billDutiesAndTaxesToOption
     * @return string
     */
    public function setBillDutiesAndTaxesToOption($_billDutiesAndTaxesToOption)
    {
        return ($this->billDutiesAndTaxesToOption = $_billDutiesAndTaxesToOption);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructBillDutiesAndTaxesToDetail
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
