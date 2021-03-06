<?php
/**
 * File for class MynewServiceStructReturnFullAddress

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructReturnFullAddress originally named ReturnFullAddress
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructReturnFullAddress extends MynewServiceStructCommonFullAddress
{
    /**
     * The contact
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $contact;
    /**
     * Constructor method for ReturnFullAddress
     * @see parent::__construct()
     * @param string $_contact
     * @return MynewServiceStructReturnFullAddress
     */
    public function __construct($_contact = NULL)
    {
        MynewServiceWsdlClass::__construct(array('contact'=>$_contact),false);
    }
    /**
     * Get contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param string $_contact the contact
     * @return string
     */
    public function setContact($_contact)
    {
        return ($this->contact = $_contact);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructReturnFullAddress
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
