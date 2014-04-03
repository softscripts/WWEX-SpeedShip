<?php
/**
 * File for class MynewServiceStructSenderFullAddress

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructSenderFullAddress originally named SenderFullAddress
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructSenderFullAddress extends MynewServiceStructCommonFullAddress
{
    /**
     * The additionalParameters
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructAdditionalParameters
     */
    public $additionalParameters;
    /**
     * The sentBy
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $sentBy;
    /**
     * Constructor method for SenderFullAddress
     * @see parent::__construct()
     * @param MynewServiceStructAdditionalParameters $_additionalParameters
     * @param string $_sentBy
     * @return MynewServiceStructSenderFullAddress
     */
    public function __construct($_additionalParameters = NULL,$_sentBy = NULL)
    {
        MynewServiceWsdlClass::__construct(array('additionalParameters'=>$_additionalParameters,'sentBy'=>$_sentBy),false);
    }
    /**
     * Get additionalParameters value
     * @return MynewServiceStructAdditionalParameters|null
     */
    public function getAdditionalParameters()
    {
        return $this->additionalParameters;
    }
    /**
     * Set additionalParameters value
     * @param MynewServiceStructAdditionalParameters $_additionalParameters the additionalParameters
     * @return MynewServiceStructAdditionalParameters
     */
    public function setAdditionalParameters($_additionalParameters)
    {
        return ($this->additionalParameters = $_additionalParameters);
    }
    /**
     * Get sentBy value
     * @return string|null
     */
    public function getSentBy()
    {
        return $this->sentBy;
    }
    /**
     * Set sentBy value
     * @param string $_sentBy the sentBy
     * @return string
     */
    public function setSentBy($_sentBy)
    {
        return ($this->sentBy = $_sentBy);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructSenderFullAddress
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
