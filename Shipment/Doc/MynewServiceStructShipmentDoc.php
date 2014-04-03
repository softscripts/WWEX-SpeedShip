<?php
/**
 * File for class MynewServiceStructShipmentDoc

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceStructShipmentDoc originally named ShipmentDoc
 * Meta informations extracted from the WSDL
 * - from schema : http://app6.wwex.com:8080/s3fWebService/services/SpeedShip2Service?wsdl

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceStructShipmentDoc extends MynewServiceWsdlClass
{
    /**
     * The docContent
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $docContent;
    /**
     * The docName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $docName;
    /**
     * Constructor method for ShipmentDoc
     * @see parent::__construct()
     * @param string $_docContent
     * @param string $_docName
     * @return MynewServiceStructShipmentDoc
     */
    public function __construct($_docContent = NULL,$_docName = NULL)
    {
        parent::__construct(array('docContent'=>$_docContent,'docName'=>$_docName),false);
    }
    /**
     * Get docContent value
     * @return string|null
     */
    public function getDocContent()
    {
        return $this->docContent;
    }
    /**
     * Set docContent value
     * @param string $_docContent the docContent
     * @return string
     */
    public function setDocContent($_docContent)
    {
        return ($this->docContent = $_docContent);
    }
    /**
     * Get docName value
     * @return string|null
     */
    public function getDocName()
    {
        return $this->docName;
    }
    /**
     * Set docName value
     * @param string $_docName the docName
     * @return string
     */
    public function setDocName($_docName)
    {
        return ($this->docName = $_docName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MynewServiceWsdlClass::__set_state()
     * @uses MynewServiceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MynewServiceStructShipmentDoc
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
