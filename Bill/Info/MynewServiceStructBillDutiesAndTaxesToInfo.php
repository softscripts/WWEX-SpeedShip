<?php
/**
 * File for class MynewServiceStructBillDutiesAndTaxesToInfo

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructBillDutiesAndTaxesToInfo originally named BillDutiesAndTaxesToInfo
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructBillDutiesAndTaxesToInfo extends MynewServiceWsdlClass
{
    /**
     * The billToCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $billToCountryCode;
    /**
     * The billToPostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $billToPostalCode;
    /**
     * The billToUPSAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $billToUPSAccountNumber;
    /**
     * Constructor method for BillDutiesAndTaxesToInfo
     * @see parent::__construct()
     * @param string $_billToCountryCode
     * @param string $_billToPostalCode
     * @param string $_billToUPSAccountNumber
     * @return MynewServiceStructBillDutiesAndTaxesToInfo
     */
    public function __construct($_billToCountryCode = NULL,$_billToPostalCode = NULL,$_billToUPSAccountNumber = NULL)
    {
        parent::__construct(array('billToCountryCode'=>$_billToCountryCode,'billToPostalCode'=>$_billToPostalCode,'billToUPSAccountNumber'=>$_billToUPSAccountNumber),false);
    }
    /**
     * Get billToCountryCode value
     * @return string|null
     */
    public function getBillToCountryCode()
    {
        return $this->billToCountryCode;
    }
    /**
     * Set billToCountryCode value
     * @param string $_billToCountryCode the billToCountryCode
     * @return string
     */
    public function setBillToCountryCode($_billToCountryCode)
    {
        return ($this->billToCountryCode = $_billToCountryCode);
    }
    /**
     * Get billToPostalCode value
     * @return string|null
     */
    public function getBillToPostalCode()
    {
        return $this->billToPostalCode;
    }
    /**
     * Set billToPostalCode value
     * @param string $_billToPostalCode the billToPostalCode
     * @return string
     */
    public function setBillToPostalCode($_billToPostalCode)
    {
        return ($this->billToPostalCode = $_billToPostalCode);
    }
    /**
     * Get billToUPSAccountNumber value
     * @return string|null
     */
    public function getBillToUPSAccountNumber()
    {
        return $this->billToUPSAccountNumber;
    }
    /**
     * Set billToUPSAccountNumber value
     * @param string $_billToUPSAccountNumber the billToUPSAccountNumber
     * @return string
     */
    public function setBillToUPSAccountNumber($_billToUPSAccountNumber)
    {
        return ($this->billToUPSAccountNumber = $_billToUPSAccountNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructBillDutiesAndTaxesToInfo
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
