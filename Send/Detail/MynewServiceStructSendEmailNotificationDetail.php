<?php
/**
 * File for class MynewServiceStructSendEmailNotificationDetail

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructSendEmailNotificationDetail originally named SendEmailNotificationDetail
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructSendEmailNotificationDetail extends MynewServiceWsdlClass
{
    /**
     * The notificationEmailDetails
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructNotificationEmailDetails
     */
    public $notificationEmailDetails;
    /**
     * The sendEmailNotificationIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $sendEmailNotificationIndicator;
    /**
     * Constructor method for SendEmailNotificationDetail
     * @see parent::__construct()
     * @param MynewServiceStructNotificationEmailDetails $_notificationEmailDetails
     * @param string $_sendEmailNotificationIndicator
     * @return MynewServiceStructSendEmailNotificationDetail
     */
    public function __construct($_notificationEmailDetails = NULL,$_sendEmailNotificationIndicator = NULL)
    {
        parent::__construct(array('notificationEmailDetails'=>$_notificationEmailDetails,'sendEmailNotificationIndicator'=>$_sendEmailNotificationIndicator),false);
    }
    /**
     * Get notificationEmailDetails value
     * @return MynewServiceStructNotificationEmailDetails|null
     */
    public function getNotificationEmailDetails()
    {
        return $this->notificationEmailDetails;
    }
    /**
     * Set notificationEmailDetails value
     * @param MynewServiceStructNotificationEmailDetails $_notificationEmailDetails the notificationEmailDetails
     * @return MynewServiceStructNotificationEmailDetails
     */
    public function setNotificationEmailDetails($_notificationEmailDetails)
    {
        return ($this->notificationEmailDetails = $_notificationEmailDetails);
    }
    /**
     * Get sendEmailNotificationIndicator value
     * @return string|null
     */
    public function getSendEmailNotificationIndicator()
    {
        return $this->sendEmailNotificationIndicator;
    }
    /**
     * Set sendEmailNotificationIndicator value
     * @param string $_sendEmailNotificationIndicator the sendEmailNotificationIndicator
     * @return string
     */
    public function setSendEmailNotificationIndicator($_sendEmailNotificationIndicator)
    {
        return ($this->sendEmailNotificationIndicator = $_sendEmailNotificationIndicator);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructSendEmailNotificationDetail
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
