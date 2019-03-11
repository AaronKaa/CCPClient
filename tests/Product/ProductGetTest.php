<?php

namespace AKaa\CCPApi\Tests\Product;

use AKaa\CCPApi\Client\ProductClient;
use AKaa\CCPApi\Client\ProductOptionClient;
use AKaa\CCPApi\Client\ProductRangeClient;

class ProductGetTest extends \TestCase
{
	protected $productClient;
	protected $productOptionsClient;
	protected $productRangeClient;
	
    /**
     * setUp function.
     * 
     * @access public
     * @return void
     */
    public function setUp()
    {
	    parent::setUp();
        $this->productClient = new ProductClient();
        $this->productOptionClient = new ProductOptionClient();
        $this->productRangeClient = new ProductRangeClient();
    }
    
	/**
	 * testGetActiveSalesChannels function.
	 * 
	 * @access public
	 * @return void
	 */
	public function testGetActiveSalesChannels()
	{
		$r = $this->productClient->getActiveSalesChannels();
		$this->assertObjectHasAttribute('APISalesChannel',$r);
		$this->assertTrue(is_array($r->APISalesChannel));
	}
	
	/**
	 * testGetProducts function.
	 * 
	 * @access public
	 * @return void
	 */
	public function testGetProducts()
	{
		$r = $this->productClient->getProducts(0,1);
		$this->assertObjectHasAttribute('Start',$r);
		$this->assertObjectHasAttribute('End',$r);
		$this->assertObjectHasAttribute('products',$r);
	}
	
	/**
	 * testGetStockLevelsBySKUList function.
	 * 
	 * @access public
	 * @return void
	 */
	public function testGetStockLevelsBySKUList()
	{
		$skus = [];
		
		$products = $this->productClient->getProducts(0,3);
		
		foreach($products->products->APIProduct as $product){
			$skus[] = 	$product->ManufacturerSKU;
		}
		
		$r = $this->productClient->getStockLevelsBySKUList($skus);
		
		$this->assertObjectHasAttribute('APIProductStockLevel',$r);
		$this->assertCount(3,$r->APIProductStockLevel);
	}
	
 	public function getAvailableProductOptions()
 	{
	 	
 	}
	
}
