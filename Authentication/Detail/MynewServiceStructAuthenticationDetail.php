<?php
/**
 * File for class MynewServiceStructAuthenticationDetail
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructAuthenticationDetail originally named authenticationDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl
 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructAuthenticationDetail extends MynewServiceWsdlClass
{
    /**
     * The authenticationToken
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructAuthenticationToken
     */
    public $authenticationToken;
    /**
     * Constructor method for authenticationDetail
     * @see parent::__construct()
     * @param MynewServiceStructAuthenticationToken $_authenticationToken
     * @return MynewServiceStructAuthenticationDetail
     */
    public function __construct($_authenticationToken = NULL)
    {
        parent::__construct(array('authenticationToken'=>$_authenticationToken),false);
    }
    /**
     * Get authenticationToken value
     * @return MynewServiceStructAuthenticationToken|null
     */
    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
    }
    /**
     * Set authenticationToken value
     * @param MynewServiceStructAuthenticationToken $_authenticationToken the authenticationToken
     * @return MynewServiceStructAuthenticationToken
     */
    public function setAuthenticationToken($_authenticationToken)
    {
        return ($this->authenticationToken = $_authenticationToken);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructAuthenticationDetail
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
