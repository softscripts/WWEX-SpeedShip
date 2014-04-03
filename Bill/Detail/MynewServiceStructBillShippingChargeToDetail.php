<?php
/**
 * File for class MynewServiceStructBillShippingChargeToDetail
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructBillShippingChargeToDetail originally named BillShippingChargeToDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructBillShippingChargeToDetail extends MynewServiceWsdlClass
{
    /**
     * The billShippingChargeToInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructBillShippingChargeToInfo
     */
    public $billShippingChargeToInfo;
    /**
     * The billShippingChargeToOption
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $billShippingChargeToOption;
    /**
     * Constructor method for BillShippingChargeToDetail
     * @see parent::__construct()
     * @param MynewServiceStructBillShippingChargeToInfo $_billShippingChargeToInfo
     * @param string $_billShippingChargeToOption
     * @return MynewServiceStructBillShippingChargeToDetail
     */
    public function __construct($_billShippingChargeToInfo = NULL,$_billShippingChargeToOption = NULL)
    {
        parent::__construct(array('billShippingChargeToInfo'=>$_billShippingChargeToInfo,'billShippingChargeToOption'=>$_billShippingChargeToOption),false);
    }
    /**
     * Get billShippingChargeToInfo value
     * @return MynewServiceStructBillShippingChargeToInfo|null
     */
    public function getBillShippingChargeToInfo()
    {
        return $this->billShippingChargeToInfo;
    }
    /**
     * Set billShippingChargeToInfo value
     * @param MynewServiceStructBillShippingChargeToInfo $_billShippingChargeToInfo the billShippingChargeToInfo
     * @return MynewServiceStructBillShippingChargeToInfo
     */
    public function setBillShippingChargeToInfo($_billShippingChargeToInfo)
    {
        return ($this->billShippingChargeToInfo = $_billShippingChargeToInfo);
    }
    /**
     * Get billShippingChargeToOption value
     * @return string|null
     */
    public function getBillShippingChargeToOption()
    {
        return $this->billShippingChargeToOption;
    }
    /**
     * Set billShippingChargeToOption value
     * @param string $_billShippingChargeToOption the billShippingChargeToOption
     * @return string
     */
    public function setBillShippingChargeToOption($_billShippingChargeToOption)
    {
        return ($this->billShippingChargeToOption = $_billShippingChargeToOption);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructBillShippingChargeToDetail
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
