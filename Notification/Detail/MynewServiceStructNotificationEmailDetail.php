<?php
/**
 * File for class MynewServiceStructNotificationEmailDetail

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructNotificationEmailDetail originally named NotificationEmailDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructNotificationEmailDetail extends MynewServiceWsdlClass
{
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $emailAddress;
    /**
     * The emailDeliveryIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $emailDeliveryIndicator;
    /**
     * The emailExceptionIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $emailExceptionIndicator;
    /**
     * The emailShipIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $emailShipIndicator;
    /**
     * Constructor method for NotificationEmailDetail
     * @see parent::__construct()
     * @param string $_emailAddress
     * @param string $_emailDeliveryIndicator
     * @param string $_emailExceptionIndicator
     * @param string $_emailShipIndicator
     * @return MynewServiceStructNotificationEmailDetail
     */
    public function __construct($_emailAddress = NULL,$_emailDeliveryIndicator = NULL,$_emailExceptionIndicator = NULL,$_emailShipIndicator = NULL)
    {
        parent::__construct(array('emailAddress'=>$_emailAddress,'emailDeliveryIndicator'=>$_emailDeliveryIndicator,'emailExceptionIndicator'=>$_emailExceptionIndicator,'emailShipIndicator'=>$_emailShipIndicator),false);
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
     * Get emailDeliveryIndicator value
     * @return string|null
     */
    public function getEmailDeliveryIndicator()
    {
        return $this->emailDeliveryIndicator;
    }
    /**
     * Set emailDeliveryIndicator value
     * @param string $_emailDeliveryIndicator the emailDeliveryIndicator
     * @return string
     */
    public function setEmailDeliveryIndicator($_emailDeliveryIndicator)
    {
        return ($this->emailDeliveryIndicator = $_emailDeliveryIndicator);
    }
    /**
     * Get emailExceptionIndicator value
     * @return string|null
     */
    public function getEmailExceptionIndicator()
    {
        return $this->emailExceptionIndicator;
    }
    /**
     * Set emailExceptionIndicator value
     * @param string $_emailExceptionIndicator the emailExceptionIndicator
     * @return string
     */
    public function setEmailExceptionIndicator($_emailExceptionIndicator)
    {
        return ($this->emailExceptionIndicator = $_emailExceptionIndicator);
    }
    /**
     * Get emailShipIndicator value
     * @return string|null
     */
    public function getEmailShipIndicator()
    {
        return $this->emailShipIndicator;
    }
    /**
     * Set emailShipIndicator value
     * @param string $_emailShipIndicator the emailShipIndicator
     * @return string
     */
    public function setEmailShipIndicator($_emailShipIndicator)
    {
        return ($this->emailShipIndicator = $_emailShipIndicator);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructNotificationEmailDetail
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
