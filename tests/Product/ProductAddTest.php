<?php

namespace AKaa\CCPApi\Tests\Product;

use AKaa\CCPApi\Client\ProductClient;
use AKaa\CCPApi\Client\ProductOptionClient;
use AKaa\CCPApi\Client\ProductRangeClient;


class ProductAddTest extends \TestCase
{
	
	protected $productClient;
	protected $productOptionsClient;
	protected $productRangeClient;
	protected $brandId;
	
	protected $productOptions;
	
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
        $this->brandId = config('ccpapi.brand_id');
    }
    
    public function testAddProduct()
    {
	    $this->getAvailableProductOptions();
	    
	    $productRange = [
			"BrandID" => $this->brandId,
			//"Manufacturer" => "Converse",
			"ManufacturerSKU" => "TESTPROD5",
			"Name" => "TEST PRODUCT"
			//"StatusID" => "Disabled",
			//"LastStockCheck" => new \DateTime
		];
		
		$product = [
			"BrandID" => $this->brandId,
			"BarCodeNumber" => "123456789123",
			"Name" => "Test Product 1",
            "Description" => "Test Product Description",
			"ManufacturerSKU" => "M7666666",
			"BasePrice" => 7.99,
            "DateAdded" => new \DateTime
		]; 
		
		$productRangeAddResponse = $this->productRangeClient->addProductRange($productRange);

		$productAddResponse = $this->productClient->addProduct($product);

    }
    
    protected function getAvailableProductOptions()
    {
	    $r = $this->productOptionClient->getAvailableProductOptions();
	    $this->availableProductOptions = collect($r->APIProductOption);
    }
    
}
