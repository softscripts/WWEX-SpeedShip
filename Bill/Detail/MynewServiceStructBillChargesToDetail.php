<?php
/**
 * File for class MynewServiceStructBillChargesToDetail
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructBillChargesToDetail originally named BillChargesToDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructBillChargesToDetail extends MynewServiceWsdlClass
{
    /**
     * The billDutiesAndTaxesToDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructBillDutiesAndTaxesToDetail
     */
    public $billDutiesAndTaxesToDetail;
    /**
     * The billShippingChargeToDetail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructBillShippingChargeToDetail
     */
    public $billShippingChargeToDetail;
    /**
     * Constructor method for BillChargesToDetail
     * @see parent::__construct()
     * @param MynewServiceStructBillDutiesAndTaxesToDetail $_billDutiesAndTaxesToDetail
     * @param MynewServiceStructBillShippingChargeToDetail $_billShippingChargeToDetail
     * @return MynewServiceStructBillChargesToDetail
     */
    public function __construct($_billDutiesAndTaxesToDetail = NULL,$_billShippingChargeToDetail = NULL)
    {
        parent::__construct(array('billDutiesAndTaxesToDetail'=>$_billDutiesAndTaxesToDetail,'billShippingChargeToDetail'=>$_billShippingChargeToDetail),false);
    }
    /**
     * Get billDutiesAndTaxesToDetail value
     * @return MynewServiceStructBillDutiesAndTaxesToDetail|null
     */
    public function getBillDutiesAndTaxesToDetail()
    {
        return $this->billDutiesAndTaxesToDetail;
    }
    /**
     * Set billDutiesAndTaxesToDetail value
     * @param MynewServiceStructBillDutiesAndTaxesToDetail $_billDutiesAndTaxesToDetail the billDutiesAndTaxesToDetail
     * @return MynewServiceStructBillDutiesAndTaxesToDetail
     */
    public function setBillDutiesAndTaxesToDetail($_billDutiesAndTaxesToDetail)
    {
        return ($this->billDutiesAndTaxesToDetail = $_billDutiesAndTaxesToDetail);
    }
    /**
     * Get billShippingChargeToDetail value
     * @return MynewServiceStructBillShippingChargeToDetail|null
     */
    public function getBillShippingChargeToDetail()
    {
        return $this->billShippingChargeToDetail;
    }
    /**
     * Set billShippingChargeToDetail value
     * @param MynewServiceStructBillShippingChargeToDetail $_billShippingChargeToDetail the billShippingChargeToDetail
     * @return MynewServiceStructBillShippingChargeToDetail
     */
    public function setBillShippingChargeToDetail($_billShippingChargeToDetail)
    {
        return ($this->billShippingChargeToDetail = $_billShippingChargeToDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructBillChargesToDetail
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
