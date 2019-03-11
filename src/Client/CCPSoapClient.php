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
     * (default value: "https://wcfccpservicesbase.cloudcommercepro.com/")
     *
     * @var string
     * @access protected
     */
    protected $servicebase = "https://wcfccpservicesbase.cloudcommercepro.com/";

    /**
     * servicepoint
     *
     * @var mixed
     * @access protected
     */
    protected $servicepoint;
    
    /**
     * exceptions
     * 
     * (default value: true)
     * 
     * @var bool
     * @access protected
     */
    protected $exceptions = true;
    
    /**
     * cache_wsdl
     * 
     * (default value: WSDL_CACHE_NONE)
     * 
     * @var mixed
     * @access protected
     */
    protected $cache_wsdl = WSDL_CACHE_NONE;

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
     */
    public function __construct()
    {
        if(empty($this->servicepoint)){
            throw new \Exception("You need to specify a client servicepoint", 1);
        }
        
        $this->wsdl = $this->servicebase . $this->servicepoint . '?wsdl';
        parent::__construct();
    }

    /**
     * wrapRequest function.
     *
     * @access public
     * @param mixed $request
     * @return array
     */
    public function wrapRequest($request)
    {
        return ['parameters' => ['request' => $request]];
    }

    /**
     * ccpCall function.
     *
     * @access public
     * @param mixed $function
     * @param mixed $request
     * @return mixed
     */
    public function ccpCall($function, $request)
    {
	    $r = $this->call($function, self::wrapRequest($request));
	    //The returned object is generally of the form [function name] + 'Result'
	    
	    $responseObject = $function.'Result';
	    
	    if(!$r->$responseObject->Success){
			//dd($r);
		    $errors = json_encode($r->$responseObject->Errors);
		    
			throw new \ErrorException($function ." : " . $r->$responseObject->ErrorLevel." : ".$errors);
	    }

	    return $r->$responseObject->Content;
    }
}
