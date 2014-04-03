<?php
/**
 * File for class MynewServiceStructNotificationEmailDetails

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructNotificationEmailDetails originally named NotificationEmailDetails
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructNotificationEmailDetails extends MynewServiceWsdlClass
{
    /**
     * The emailMessage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $emailMessage;
    /**
     * The notificationEmailDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructNotificationEmailDetail
     */
    public $notificationEmailDetail;
    /**
     * The sendUndeliverableEmail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $sendUndeliverableEmail;
    /**
     * The undeliverableEmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $undeliverableEmailAddress;
    /**
     * Constructor method for NotificationEmailDetails
     * @see parent::__construct()
     * @param string $_emailMessage
     * @param MynewServiceStructNotificationEmailDetail $_notificationEmailDetail
     * @param string $_sendUndeliverableEmail
     * @param string $_undeliverableEmailAddress
     * @return MynewServiceStructNotificationEmailDetails
     */
    public function __construct($_emailMessage = NULL,$_notificationEmailDetail = NULL,$_sendUndeliverableEmail = NULL,$_undeliverableEmailAddress = NULL)
    {
        parent::__construct(array('emailMessage'=>$_emailMessage,'notificationEmailDetail'=>$_notificationEmailDetail,'sendUndeliverableEmail'=>$_sendUndeliverableEmail,'undeliverableEmailAddress'=>$_undeliverableEmailAddress),false);
    }
    /**
     * Get emailMessage value
     * @return string|null
     */
    public function getEmailMessage()
    {
        return $this->emailMessage;
    }
    /**
     * Set emailMessage value
     * @param string $_emailMessage the emailMessage
     * @return string
     */
    public function setEmailMessage($_emailMessage)
    {
        return ($this->emailMessage = $_emailMessage);
    }
    /**
     * Get notificationEmailDetail value
     * @return MynewServiceStructNotificationEmailDetail|null
     */
    public function getNotificationEmailDetail()
    {
        return $this->notificationEmailDetail;
    }
    /**
     * Set notificationEmailDetail value
     * @param MynewServiceStructNotificationEmailDetail $_notificationEmailDetail the notificationEmailDetail
     * @return MynewServiceStructNotificationEmailDetail
     */
    public function setNotificationEmailDetail($_notificationEmailDetail)
    {
        return ($this->notificationEmailDetail = $_notificationEmailDetail);
    }
    /**
     * Get sendUndeliverableEmail value
     * @return string|null
     */
    public function getSendUndeliverableEmail()
    {
        return $this->sendUndeliverableEmail;
    }
    /**
     * Set sendUndeliverableEmail value
     * @param string $_sendUndeliverableEmail the sendUndeliverableEmail
     * @return string
     */
    public function setSendUndeliverableEmail($_sendUndeliverableEmail)
    {
        return ($this->sendUndeliverableEmail = $_sendUndeliverableEmail);
    }
    /**
     * Get undeliverableEmailAddress value
     * @return string|null
     */
    public function getUndeliverableEmailAddress()
    {
        return $this->undeliverableEmailAddress;
    }
    /**
     * Set undeliverableEmailAddress value
     * @param string $_undeliverableEmailAddress the undeliverableEmailAddress
     * @return string
     */
    public function setUndeliverableEmailAddress($_undeliverableEmailAddress)
    {
        return ($this->undeliverableEmailAddress = $_undeliverableEmailAddress);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructNotificationEmailDetails
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
