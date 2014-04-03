<?php
/**
 * File for class MynewServiceStructShipmentPickupInfo

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentPickupInfo originally named ShipmentPickupInfo
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentPickupInfo extends MynewServiceStructCommonFullAddress
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
     * The pickupByTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupByTime;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupDate;
    /**
     * The pickupFloor
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupFloor;
    /**
     * The pickupLocation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupLocation;
    /**
     * The pickupRoom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupRoom;
    /**
     * The pickupType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pickupType;
    /**
     * The readyTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $readyTime;
    /**
     * Constructor method for ShipmentPickupInfo
     * @see parent::__construct()
     * @param string $_contact
     * @param string $_pickupByTime
     * @param string $_pickupDate
     * @param string $_pickupFloor
     * @param string $_pickupLocation
     * @param string $_pickupRoom
     * @param string $_pickupType
     * @param string $_readyTime
     * @return MynewServiceStructShipmentPickupInfo
     */
    public function __construct($_contact = NULL,$_pickupByTime = NULL,$_pickupDate = NULL,$_pickupFloor = NULL,$_pickupLocation = NULL,$_pickupRoom = NULL,$_pickupType = NULL,$_readyTime = NULL)
    {
        MynewServiceWsdlClass::__construct(array('contact'=>$_contact,'pickupByTime'=>$_pickupByTime,'pickupDate'=>$_pickupDate,'pickupFloor'=>$_pickupFloor,'pickupLocation'=>$_pickupLocation,'pickupRoom'=>$_pickupRoom,'pickupType'=>$_pickupType,'readyTime'=>$_readyTime),false);
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
     * Get pickupByTime value
     * @return string|null
     */
    public function getPickupByTime()
    {
        return $this->pickupByTime;
    }
    /**
     * Set pickupByTime value
     * @param string $_pickupByTime the pickupByTime
     * @return string
     */
    public function setPickupByTime($_pickupByTime)
    {
        return ($this->pickupByTime = $_pickupByTime);
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $_pickupDate the pickupDate
     * @return string
     */
    public function setPickupDate($_pickupDate)
    {
        return ($this->pickupDate = $_pickupDate);
    }
    /**
     * Get pickupFloor value
     * @return string|null
     */
    public function getPickupFloor()
    {
        return $this->pickupFloor;
    }
    /**
     * Set pickupFloor value
     * @param string $_pickupFloor the pickupFloor
     * @return string
     */
    public function setPickupFloor($_pickupFloor)
    {
        return ($this->pickupFloor = $_pickupFloor);
    }
    /**
     * Get pickupLocation value
     * @return string|null
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }
    /**
     * Set pickupLocation value
     * @param string $_pickupLocation the pickupLocation
     * @return string
     */
    public function setPickupLocation($_pickupLocation)
    {
        return ($this->pickupLocation = $_pickupLocation);
    }
    /**
     * Get pickupRoom value
     * @return string|null
     */
    public function getPickupRoom()
    {
        return $this->pickupRoom;
    }
    /**
     * Set pickupRoom value
     * @param string $_pickupRoom the pickupRoom
     * @return string
     */
    public function setPickupRoom($_pickupRoom)
    {
        return ($this->pickupRoom = $_pickupRoom);
    }
    /**
     * Get pickupType value
     * @return string|null
     */
    public function getPickupType()
    {
        return $this->pickupType;
    }
    /**
     * Set pickupType value
     * @param string $_pickupType the pickupType
     * @return string
     */
    public function setPickupType($_pickupType)
    {
        return ($this->pickupType = $_pickupType);
    }
    /**
     * Get readyTime value
     * @return string|null
     */
    public function getReadyTime()
    {
        return $this->readyTime;
    }
    /**
     * Set readyTime value
     * @param string $_readyTime the readyTime
     * @return string
     */
    public function setReadyTime($_readyTime)
    {
        return ($this->readyTime = $_readyTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentPickupInfo
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
