<?php
namespace AKaa\CCPApi\Client;

use AKaa\CCPApi\Client\SoapObjects\Product\Arrays\ArrayOfString;

use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfString;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfInt32;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfListOfString;

use AKaa\CCPApi\Client\SoapObjects\Product\Request\APIProductGetProductListRequest;
use AKaa\CCPApi\Client\SoapObjects\Product\Request\RequestObjectOfAPIProduct;
use AKaa\CCPApi\Client\SoapObjects\Product\Request\RequestObjectOfAPIProductSalesChannelLink;
use AKaa\CCPApi\Client\SoapObjects\Product\Request\RequestObjectOfAPIProductGetProductListRequest;
use AKaa\CCPApi\Client\SoapObjects\Product\Request\RequestObjectOfAPIProductWarehouseBayStockMovementRequest;
use AKaa\CCPApi\Client\SoapObjects\Product\Request\APIProductWarehouseBayStockMovementRequest;

use AKaa\CCPApi\Client\Entities\APIProduct;
use AKaa\CCPApi\Client\Entities\APIProductSalesChannelLink;

/**
 * ProductClient class.
 *
 * @extends CCPSoapClient
 */
class ProductClient extends CCPSoapClient
{
    /**
     * servicepoint
     *
     * (default value: "CCPApiProductsService.svc")
     *
     * @var string
     * @access protected
     */
    protected $servicepoint = "CCPApiProductsService.svc";

    /**
     * getActiveSalesChannels function.
     *
     * @access public
     * @return void
     */
    public function getActiveSalesChannels()
    {
        $request = new RequestObjectOfString();

        return $this->ccpCall('getActiveSalesChannels', $request);
    }

    /**
     * getProducts function.
     *
     * @access public
     * @param int $start (default: 0)
     * @param int $end (default: 100)
     * @param int $sales_channel (default: 0)
     * @return void
     */
    public function getProducts($start = 0, $end = 100, $sales_channel = 0, $skulist = null)
    {
        $requestContent = new APIProductGetProductListRequest($start, $end, $sales_channel, $skulist);
        $request = new RequestObjectOfAPIProductGetProductListRequest($requestContent);
        return $this->ccpCall('getProducts', $request);
    }

    /**
     * getStockLevelsBySKUList function.
     *
     * @access public
     * @param mixed $skus
     * @return void
     */
    public function getStockLevelsBySKUList($skus)
    {
        $request = new RequestObjectOfListOfString($skus);

        return $this->ccpCall('GetStockLevelsBySKUList', $request);
    }

    /**
     * getProductByBarcode function.
     *
     * @access public
     * @param mixed $barcode
     * @return void
     */
    public function getProductByBarcode($barcode)
    {
        $request = new RequestObjectOfString($barcode);

        return $this->ccpCall('getProductByBarcode', $request);
    }

    /**
     * getProductByExternalProductId function.
     *
     * @access public
     * @param mixed $external_id
     * @return void
     */
    public function getProductByExternalProductId($external_id)
    {
        $request = new RequestObjectOfString($external_id);

        return $this->ccpCall('getProductByExternalProductId', $request);
    }

    /**
     * getProductByID function.
     *
     * @access public
     * @param mixed $id
     * @return void
     */
    public function getProductByID($id)
    {
        $request = new RequestObjectOfInt32($id);

        return $this->ccpCall('getProductByID', $request);
    }

    /**
     * getProductByManufacturerSKU function.
     *
     * @access public
     * @param mixed $sku
     * @return void
     */
    public function getProductByManufacturerSKU($sku)
    {
        $request = new RequestObjectOfString($sku);

        return $this->ccpCall('getProductByManufacturerSKU', $request);
    }

    /**
     * getProductImages function.
     *
     * @access public
     * @param mixed $product_id
     * @return void
     */
    public function getProductImages($product_id)
    {
        $request = new RequestObjectOfInt32($product_id);

        return $this->ccpCall('getProductImages', $request);
    }

    /**
     * addProduct function.
     *
     * @access public
     * @param array $product
     * @return void
     */
    public function addProduct(array $product)
    {
        $apiProduct = new APIProduct($product);
        $apiProduct->setBrandID(config('ccpapi.brand_id'));
        $request = new RequestObjectOfAPIProduct($apiProduct);

        return $this->ccpCall("AddProduct", $request);
    }
    
    /**
     * addProductRange function.
     * 
     * @access public
     * @param array $product
     * @return void
     */
    public function addProductRange(array $product)
    {
        $apiProduct = new APIProduct($product);
        $apiProduct->setBrandID(config('ccpapi.brand_id'));
        $request = new RequestObjectOfAPIProduct($apiProduct);

        return $this->ccpCall("AddProductRange", $request);
    }
    
    /**
     * getWarehouses function.
     * 
     * @access public
     * @return void
     */
    public function getWarehouses()
    {
	    $request = new RequestObjectOfInt32(0);
		dd($this->ccpCall('GetWarehouses', $request));
        return $this->ccpCall('GetWarehouses', $request);
    }
    
    /**
     * getWarehouseBays function.
     * 
     * @access public
     * @return void
     */
    public function getWarehouseBays()
    {
	    $request = new RequestObjectOfInt32();
	    
        return $this->ccpCall('GetWarehouseBays', $request);
    }
	
    /**
     * getWarehouseBaysForProduct function.
     * 
     * @access public
     * @return void
     */
    public function getWarehouseBaysForProduct()
    {
	    $apiProductWarehouseBayStockMovementRequest = new APIProductWarehouseBayStockMovementRequest();
	    $apiProductWarehouseBayStockMovementRequest->setBrandID(config('ccpapi.brand_id'));
	    $request = new RequestObjectOfAPIProductWarehouseBayStockMovementRequest($apiProductWarehouseBayStockMovementRequest);
	    
	    return $this->ccpCall('GetWarehouseBaysForProduct', $request);
    }
    
    /**
     * moveStockToBay function.
     * 
     * @access public
     * @return void
     */
    public function moveStockToBay()
    {
	    $apiProductWarehouseBayStockMovementRequest = new APIProductWarehouseBayStockMovementRequest();
	    $apiProductWarehouseBayStockMovementRequest->setBrandID(config('ccpapi.brand_id'));
	    $request = new RequestObjectOfAPIProductWarehouseBayStockMovementRequest($apiProductWarehouseBayStockMovementRequest);
	    
	    return $this->ccpCall('MoveStockToBay', $request);
    }
    
    /**
     * addStockToBay function.
     * 
     * @access public
     * @return void
     */
    public function addStockToBay()
    {
	    $apiProductWarehouseBayStockMovementRequest = new APIProductWarehouseBayStockMovementRequest();
	    $apiProductWarehouseBayStockMovementRequest->setBrandID(config('ccpapi.brand_id'));
	    $request = new RequestObjectOfAPIProductWarehouseBayStockMovementRequest($apiProductWarehouseBayStockMovementRequest);
	    
	    return $this->ccpCall("AddStockToBay", $request);
    }
    
    /**
     * setStockLevel function.
     * 
     * @access public
     * @param mixed $product_id
     * @param mixed $quantity
     * @param mixed $reason
     * @return void
     */
    public function setStockLevel($product_id, $quantity, $reason) 
    {
	    $apiProductStockTransaction = new APIProductStockTransaction($product_id, $quantity, $reason, "id");
	    $request = new RequestObjectOfAPIProductStockTransaction($apiProductStockTransaction);
	    
	    return $this->ccpCall("setStockLevel", $request);
    }
    
    /**
     * setStockLevelByProductCode function.
     * 
     * @access public
     * @param mixed $product_code
     * @param mixed $quantity
     * @param mixed $reason
     * @return void
     */
    public function setStockLevelByProductCode($product_code, $quantity, $reason) 
    {
	    $apiProductStockTransaction = new APIProductStockTransaction($product_code, $quantity, $reason, "code");
	    $request = new RequestObjectOfAPIProductStockTransaction($apiProductStockTransaction);
	    
	    return $this->ccpCall("setStockLevelByProductCode", $request);
    }
    
    /**
     * setStockLevelBySKU function.
     * 
     * @access public
     * @param mixed $sku
     * @param mixed $quantity
     * @param mixed $reason
     * @return void
     */
    public function setStockLevelBySKU($sku, $quantity, $reason) 
    {
	    $apiProductStockTransaction = new APIProductStockTransaction($sku, $quantity, $reason, "sku");
	    $request = new RequestObjectOfAPIProductStockTransaction($apiProductStockTransaction);
	    
	    return $this->ccpCall("setStockLevelBySKU", $request);
    }
	

    /**
     * setPriceForChannel function.
     * 
     * @access public
     * @param mixed $link_id (default: null)
     * @param mixed $sales_channel_id (default: null)
     * @param mixed $product_id (default: null)
     * @param mixed $price (default: null)
     * @param mixed $sku (default: null)
     * @param mixed $product_range_id (default: null)
     * @param mixed $vat_rate_id (default: null)
     * @return void
     */
    public function setPriceForChannel($link_id = null, $sales_channel_id = null, $product_id = null,$price = null,$sku = null,$product_range_id = null, $vat_rate_id = null)
    {
	    $apiProductSCL = new APIProductSalesChannelLink();
	    
        $apiProductSCL->setBrandID(config('ccpapi.brand_id'));
        $apiProductSCL->setID($link_id);
        $apiProductSCL->setProductID($product_id);
		$apiProductSCL->setProductRangeID(5049748);
        $apiProductSCL->setSKU($sku);
        $apiProductSCL->setPrice($price);
        $apiProductSCL->setSalesChannelID($sales_channel_id);
        $apiProductSCL->setVATRateID(5);
        
        $request = new RequestObjectOfAPIProductSalesChannelLink($apiProductSCL);

        return $this->ccpCall("AddSalesChannelLink", $request);
    }

}
