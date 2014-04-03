<?php
/**
 * File for class MynewServiceStructCommonFullAddress

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructCommonFullAddress originally named CommonFullAddress
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructCommonFullAddress extends MynewServiceStructSimpleShipmentAddress
{
    /**
     * The addressLine1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $addressLine1;
    /**
     * The addressLine2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $addressLine2;
    /**
     * The addressLine3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $addressLine3;
    /**
     * The companyOrName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $companyOrName;
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $emailAddress;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $phoneNumber;
    /**
     * Constructor method for CommonFullAddress
     * @see parent::__construct()
     * @param string $_addressLine1
     * @param string $_addressLine2
     * @param string $_addressLine3
     * @param string $_companyOrName
     * @param string $_emailAddress
     * @param string $_phoneNumber
     * @return MynewServiceStructCommonFullAddress
     */
    public function __construct($_addressLine1 = NULL,$_addressLine2 = NULL,$_addressLine3 = NULL,$_companyOrName = NULL,$_emailAddress = NULL,$_phoneNumber = NULL)
    {
        MynewServiceWsdlClass::__construct(array('addressLine1'=>$_addressLine1,'addressLine2'=>$_addressLine2,'addressLine3'=>$_addressLine3,'companyOrName'=>$_companyOrName,'emailAddress'=>$_emailAddress,'phoneNumber'=>$_phoneNumber),false);
    }
    /**
     * Get addressLine1 value
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }
    /**
     * Set addressLine1 value
     * @param string $_addressLine1 the addressLine1
     * @return string
     */
    public function setAddressLine1($_addressLine1)
    {
        return ($this->addressLine1 = $_addressLine1);
    }
    /**
     * Get addressLine2 value
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }
    /**
     * Set addressLine2 value
     * @param string $_addressLine2 the addressLine2
     * @return string
     */
    public function setAddressLine2($_addressLine2)
    {
        return ($this->addressLine2 = $_addressLine2);
    }
    /**
     * Get addressLine3 value
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }
    /**
     * Set addressLine3 value
     * @param string $_addressLine3 the addressLine3
     * @return string
     */
    public function setAddressLine3($_addressLine3)
    {
        return ($this->addressLine3 = $_addressLine3);
    }
    /**
     * Get companyOrName value
     * @return string|null
     */
    public function getCompanyOrName()
    {
        return $this->companyOrName;
    }
    /**
     * Set companyOrName value
     * @param string $_companyOrName the companyOrName
     * @return string
     */
    public function setCompanyOrName($_companyOrName)
    {
        return ($this->companyOrName = $_companyOrName);
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $_emailAddress the emailAddress
     * @return string
     */
    public function setEmailAddress($_emailAddress)
    {
        return ($this->emailAddress = $_emailAddress);
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $_phoneNumber the phoneNumber
     * @return string
     */
    public function setPhoneNumber($_phoneNumber)
    {
        return ($this->phoneNumber = $_phoneNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructCommonFullAddress
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
