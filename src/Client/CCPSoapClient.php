<?php
namespace AKaa\CCPApi\Client;

use Artisaninweb\SoapWrapper\Extension\SoapService;

/**
 * CCPSoapClient class.
 *
 * @extends SoapService
 */
class CCPSoapClient extends SoapService
{

    /**
     * namespace
     * 
     * (default value: 'http://tempuri.org/')
     * 
     * @var string
     * @access protected
     */
    protected $namespace = 'http://tempuri.org/';

    /**
     * servicebase
     * 
     * (default value: "http://wcfccpservicesbase.cloudcommercepro.com/")
     * 
     * @var string
     * @access protected
     */
    protected $servicebase = "http://wcfccpservicesbase.cloudcommercepro.com/";

    /**
     * servicepoint
     * 
     * @var mixed
     * @access protected
     */
    protected $servicepoint;

    /**
     * trace
     * 
     * (default value: true)
     * 
     * @var bool
     * @access protected
     */
    protected $trace = true;

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->wsdl = $this->servicebase . $this->servicepoint . '?wsdl';
        parent::__construct();
    }

    /**
     * wrapRequest function.
     * 
     * @access public
     * @param mixed $request
     * @return void
     */
    public function wrapRequest($request)
    {
        return ['parameters' => ['request' => $request]];
    }
}
