<?php
/**
 * File for class MynewServiceStructAuthenticationToken
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructAuthenticationToken originally named AuthenticationToken
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructAuthenticationToken extends MynewServiceWsdlClass
{
    /**
     * The loginId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $loginId;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $password;
    /**
     * The licenseKey
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $licenseKey;
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $accountNumber;
    /**
     * Constructor method for AuthenticationToken
     * @see parent::__construct()
     * @param string $_loginId
     * @param string $_password
     * @param string $_licenseKey
     * @param string $_accountNumber
     * @return MynewServiceStructAuthenticationToken
     */
    public function __construct($_loginId = NULL,$_password = NULL,$_licenseKey = NULL,$_accountNumber = NULL)
    {
        parent::__construct(array('loginId'=>$_loginId,'password'=>$_password,'licenseKey'=>$_licenseKey,'accountNumber'=>$_accountNumber),false);
    }
    /**
     * Get loginId value
     * @return string|null
     */
    public function getLoginId()
    {
        return $this->loginId;
    }
    /**
     * Set loginId value
     * @param string $_loginId the loginId
     * @return string
     */
    public function setLoginId($_loginId)
    {
        return ($this->loginId = $_loginId);
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }
    /**
     * Get licenseKey value
     * @return string|null
     */
    public function getLicenseKey()
    {
        return $this->licenseKey;
    }
    /**
     * Set licenseKey value
     * @param string $_licenseKey the licenseKey
     * @return string
     */
    public function setLicenseKey($_licenseKey)
    {
        return ($this->licenseKey = $_licenseKey);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $_accountNumber the accountNumber
     * @return string
     */
    public function setAccountNumber($_accountNumber)
    {
        return ($this->accountNumber = $_accountNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructAuthenticationToken
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
