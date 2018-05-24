<?php 
namespace AKaa\CCPApi\Client\SoapObjects;

/**
 * Abstract AbstractRequestObject class.
 * 
 * @abstract
 */
abstract class AbstractRequestObject {
	
    /**
     * BrandID
     * 
     * (default value: null)
     * 
     * @var mixed
     * @access protected
     */
    protected $BrandID = null;
	
    /**
     * SecurityHash
     * 
     * (default value: null)
     * 
     * @var mixed
     * @access protected
     */
    protected $SecurityHash = null;
    
    /**
     * Content
     * 
     * (default value: null)
     * 
     * @var mixed
     * @access protected
     */
    protected $Content = null;
    

    /**
     * __construct function.
     * 
     * @access public
     * @param mixed $content (default: null)
     * @return void
     */
    public function __construct($content = null)
    {
	    
	    $this->Content = $content;
	    
	    $this->BrandID = config('ccpapi.brand_id');
		$this->SecurityHash = config('ccpapi.hash');
    }
    
    /**
     * @return int
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param int $BrandID
     * @return RequestObjectOfInt32
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecurityHash()
    {
      return $this->SecurityHash;
    }

    /**
     * @param string $SecurityHash
     * @return RequestObjectOfInt32
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }
	
	
	/**
     * getContent function.
     * 
     * @access public
     * @return void
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * setContent function.
     * 
     * @access public
     * @param mixed $content
     * @return void
     */
    public function setContent($content)
    {
      $this->Content = $content;
      return $this;
    }

}