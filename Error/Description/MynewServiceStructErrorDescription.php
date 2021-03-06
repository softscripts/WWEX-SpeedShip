<?php
/**
 * File for class MynewServiceStructErrorDescription

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructErrorDescription originally named ErrorDescription
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructErrorDescription extends MynewServiceWsdlClass
{
    /**
     * The errorDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $errorDescription;
    /**
     * Constructor method for ErrorDescription
     * @see parent::__construct()
     * @param string $_errorDescription
     * @return MynewServiceStructErrorDescription
     */
    public function __construct($_errorDescription = NULL)
    {
        parent::__construct(array('errorDescription'=>$_errorDescription),false);
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $_errorDescription the errorDescription
     * @return string
     */
    public function setErrorDescription($_errorDescription)
    {
        return ($this->errorDescription = $_errorDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructErrorDescription
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
