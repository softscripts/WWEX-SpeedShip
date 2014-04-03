<?php
/**
 * File for class MynewServiceStructGetUPSServiceDetails

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructGetUPSServiceDetails originally named getUPSServiceDetails
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructGetUPSServiceDetails extends MynewServiceWsdlClass
{
    /**
     * The upsServiceDetailRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructUPSServiceDetailRequest
     */
    public $upsServiceDetailRequest;
    /**
     * Constructor method for getUPSServiceDetails
     * @see parent::__construct()
     * @param MynewServiceStructUPSServiceDetailRequest $_upsServiceDetailRequest
     * @return MynewServiceStructGetUPSServiceDetails
     */
    public function __construct($_upsServiceDetailRequest = NULL)
    {
        parent::__construct(array('upsServiceDetailRequest'=>$_upsServiceDetailRequest),false);
    }
    /**
     * Get upsServiceDetailRequest value
     * @return MynewServiceStructUPSServiceDetailRequest|null
     */
    public function getUpsServiceDetailRequest()
    {
        return $this->upsServiceDetailRequest;
    }
    /**
     * Set upsServiceDetailRequest value
     * @param MynewServiceStructUPSServiceDetailRequest $_upsServiceDetailRequest the upsServiceDetailRequest
     * @return MynewServiceStructUPSServiceDetailRequest
     */
    public function setUpsServiceDetailRequest($_upsServiceDetailRequest)
    {
        return ($this->upsServiceDetailRequest = $_upsServiceDetailRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructGetUPSServiceDetails
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
