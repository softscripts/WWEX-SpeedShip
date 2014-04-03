<?php
/**
 * File for class MynewServiceStructUPSServiceDetails

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructUPSServiceDetails originally named UPSServiceDetails
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructUPSServiceDetails extends MynewServiceWsdlClass
{
    /**
     * The upsServiceDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructUPSServiceDetail
     */
    public $upsServiceDetail;
    /**
     * Constructor method for UPSServiceDetails
     * @see parent::__construct()
     * @param MynewServiceStructUPSServiceDetail $_upsServiceDetail
     * @return MynewServiceStructUPSServiceDetails
     */
    public function __construct($_upsServiceDetail = NULL)
    {
        parent::__construct(array('upsServiceDetail'=>$_upsServiceDetail),false);
    }
    /**
     * Get upsServiceDetail value
     * @return MynewServiceStructUPSServiceDetail|null
     */
    public function getUpsServiceDetail()
    {
        return $this->upsServiceDetail;
    }
    /**
     * Set upsServiceDetail value
     * @param MynewServiceStructUPSServiceDetail $_upsServiceDetail the upsServiceDetail
     * @return MynewServiceStructUPSServiceDetail
     */
    public function setUpsServiceDetail($_upsServiceDetail)
    {
        return ($this->upsServiceDetail = $_upsServiceDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructUPSServiceDetails
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
