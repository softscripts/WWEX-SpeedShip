<?php
/**
 * File for class MynewServiceServiceShip

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
/**
 * This class stands for MynewServiceServiceShip originally named Ship

 * @author Soft Scripts Team <srinivas@softscripts.net>
 * @version 20140325-01
 * @date 2014-03-29
 */
class MynewServiceServiceShip extends MynewServiceWsdlClass
{
    /**
     * Sets the authenticationDetail SoapHeader param
     * @uses MynewServiceWsdlClass::setSoapHeader()
     * @param MynewServiceStructAuthenticationDetail $_mynewServiceStructAuthenticationDetail
     * @param string $_nameSpace http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * @param bool $_mustUnderstand
     * @param string $_actor
     * @return bool true|false
     */
    public function setSoapHeaderAuthenticationDetail(MynewServiceStructAuthenticationDetail $_mynewServiceStructAuthenticationDetail,$_nameSpace = 'http://service.v1.speedship2.s3f.soapservice.ws.wwex.com',$_mustUnderstand = false,$_actor = null)
    {
        return $this->setSoapHeader($_nameSpace,'authenticationDetail',$_mynewServiceStructAuthenticationDetail,$_mustUnderstand,$_actor);
    }
    /**
     * Method to call the operation originally named shipRatedService
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail,authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com,http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : {@link MynewServiceStructAuthenticationDetail},{@link MynewServiceStructAuthenticationDetail}
     * - SOAPHeaders : required,required
     * @uses MynewServiceWsdlClass::getSoapClient()
     * @uses MynewServiceWsdlClass::setResult()
     * @uses MynewServiceWsdlClass::saveLastError()
     * @param MynewServiceStructShipRatedService $_mynewServiceStructShipRatedService
     * @return MynewServiceStructShipRatedServiceResponse
     */
    public function shipRatedService(MynewServiceStructShipRatedService $_mynewServiceStructShipRatedService)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->shipRatedService($_mynewServiceStructShipRatedService));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named shipUPSShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : authenticationDetail,authenticationDetail
     * - SOAPHeaderNamespaces : http://service.v1.speedship2.s3f.soapservice.ws.wwex.com,http://service.v1.speedship2.s3f.soapservice.ws.wwex.com
     * - SOAPHeaderTypes : {@link MynewServiceStructAuthenticationDetail},{@link MynewServiceStructAuthenticationDetail}
     * - SOAPHeaders : required,required
     * @uses MynewServiceWsdlClass::getSoapClient()
     * @uses MynewServiceWsdlClass::setResult()
     * @uses MynewServiceWsdlClass::saveLastError()
     * @param MynewServiceStructShipUPSShipment $_mynewServiceStructShipUPSShipment
     * @return MynewServiceStructShipUPSShipmentResponse
     */
    public function shipUPSShipment(MynewServiceStructShipUPSShipment $_mynewServiceStructShipUPSShipment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->shipUPSShipment($_mynewServiceStructShipUPSShipment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MynewServiceWsdlClass::getResult()
     * @return MynewServiceStructShipRatedServiceResponse|MynewServiceStructShipUPSShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
