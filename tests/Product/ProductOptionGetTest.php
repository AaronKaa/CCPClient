<?php

namespace AKaa\CCPApi\Tests\Product;

use AKaa\CCPApi\Client\ProductOptionClient;

class ProductOptionGetTest extends \TestCase
{
	
	protected $productOptionClient;
	
	/**
     * setUp function.
     * 
     * @access public
     * @return void
     */
    public function setUp()
    {
	    parent::setUp();
        $this->productOptionClient = new ProductOptionClient();
    }
    
    public function testGetOptionValues()
    {
	    $availProductOptionsResponse = $this->productOptionClient->getAvailableProductOptions();
	    $availableProductOptions = collect($availProductOptionsResponse->APIProductOption);
	   
	    $r = $this->productOptionClient->getOptionValues(
	    									$availableProductOptions->where('Master',true)
	    															->first()
	    															->ID
																);
		dd($r);
    }
    
    public function testGetAvailableProductOptions()
    {
	    $r = $this->productOptionClient->getAvailableProductOptions();
	    $this->assertObjectHasAttribute('APIProductOption',$r);
    }
	
}
