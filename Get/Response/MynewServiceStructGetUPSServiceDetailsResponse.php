<?php
/**
 * File for class MynewServiceStructGetUPSServiceDetailsResponse

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructGetUPSServiceDetailsResponse originally named getUPSServiceDetailsResponse
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructGetUPSServiceDetailsResponse extends MynewServiceWsdlClass
{
    /**
     * The upsServiceDetailResponse
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var MynewServiceStructUPSServiceDetailResponse
     */
    public $upsServiceDetailResponse;
    /**
     * Constructor method for getUPSServiceDetailsResponse
     * @see parent::__construct()
     * @param MynewServiceStructUPSServiceDetailResponse $_upsServiceDetailResponse
     * @return MynewServiceStructGetUPSServiceDetailsResponse
     */
    public function __construct($_upsServiceDetailResponse = NULL)
    {
        parent::__construct(array('upsServiceDetailResponse'=>$_upsServiceDetailResponse),false);
    }
    /**
     * Get upsServiceDetailResponse value
     * @return MynewServiceStructUPSServiceDetailResponse|null
     */
    public function getUpsServiceDetailResponse()
    {
        return $this->upsServiceDetailResponse;
    }
    /**
     * Set upsServiceDetailResponse value
     * @param MynewServiceStructUPSServiceDetailResponse $_upsServiceDetailResponse the upsServiceDetailResponse
     * @return MynewServiceStructUPSServiceDetailResponse
     */
    public function setUpsServiceDetailResponse($_upsServiceDetailResponse)
    {
        return ($this->upsServiceDetailResponse = $_upsServiceDetailResponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructGetUPSServiceDetailsResponse
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
