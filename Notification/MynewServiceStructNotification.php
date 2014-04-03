<?php
/**
 * File for class MynewServiceStructNotification

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructNotification originally named Notification
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructNotification extends MynewServiceWsdlClass
{
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $notification;
    /**
     * Constructor method for Notification
     * @see parent::__construct()
     * @param string $_notification
     * @return MynewServiceStructNotification
     */
    public function __construct($_notification = NULL)
    {
        parent::__construct(array('notification'=>$_notification),false);
    }
    /**
     * Get notification value
     * @return string|null
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * Set notification value
     * @param string $_notification the notification
     * @return string
     */
    public function setNotification($_notification)
    {
        return ($this->notification = $_notification);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructNotification
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
