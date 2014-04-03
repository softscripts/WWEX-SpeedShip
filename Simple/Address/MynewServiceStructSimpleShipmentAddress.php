<?php
/**
 * File for class MynewServiceStructSimpleShipmentAddress

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructSimpleShipmentAddress originally named SimpleShipmentAddress
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructSimpleShipmentAddress extends MynewServiceWsdlClass
{
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $city;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $countryCode;
    /**
     * The postalCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $postalCode;
    /**
     * The residentialIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $residentialIndicator;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $state;
    /**
     * Constructor method for SimpleShipmentAddress
     * @see parent::__construct()
     * @param string $_city
     * @param string $_countryCode
     * @param string $_postalCode
     * @param string $_residentialIndicator
     * @param string $_state
     * @return MynewServiceStructSimpleShipmentAddress
     */
    public function __construct($_city = NULL,$_countryCode = NULL,$_postalCode = NULL,$_residentialIndicator = NULL,$_state = NULL)
    {
        parent::__construct(array('city'=>$_city,'countryCode'=>$_countryCode,'postalCode'=>$_postalCode,'residentialIndicator'=>$_residentialIndicator,'state'=>$_state),false);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $_city the city
     * @return string
     */
    public function setCity($_city)
    {
        return ($this->city = $_city);
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $_countryCode the countryCode
     * @return string
     */
    public function setCountryCode($_countryCode)
    {
        return ($this->countryCode = $_countryCode);
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $_postalCode the postalCode
     * @return string
     */
    public function setPostalCode($_postalCode)
    {
        return ($this->postalCode = $_postalCode);
    }
    /**
     * Get residentialIndicator value
     * @return string|null
     */
    public function getResidentialIndicator()
    {
        return $this->residentialIndicator;
    }
    /**
     * Set residentialIndicator value
     * @param string $_residentialIndicator the residentialIndicator
     * @return string
     */
    public function setResidentialIndicator($_residentialIndicator)
    {
        return ($this->residentialIndicator = $_residentialIndicator);
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $_state the state
     * @return string
     */
    public function setState($_state)
    {
        return ($this->state = $_state);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructSimpleShipmentAddress
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
