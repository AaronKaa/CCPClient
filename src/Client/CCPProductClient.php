<?php
namespace AKaa\CCPApi\Client;

use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfString;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfInt32;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfListOfString;

use AKaa\CCPApi\Client\SoapObjects\Product\APIProductGetProductListRequest;
use AKaa\CCPApi\Client\SoapObjects\Product\RequestObjectOfAPIProduct;
use AKaa\CCPApi\Client\SoapObjects\Product\RequestObjectOfAPIProductGetProductListRequest;

use AKaa\CCPApi\Client\Entities\APIProduct;

/**
 * CCPProductClient class.
 *
 * @extends CCPSoapClient
 */
class CCPProductClient extends CCPSoapClient
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

        return $this->call('getActiveSalesChannels', self::wrapRequest($request));
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
    public function getProducts($start = 0, $end = 100, $sales_channel = 0)
    {
        $requestContent = new APIProductGetProductListRequest($start, $end, $sales_channel);
        $request = new RequestObjectOfAPIProductGetProductListRequest($requestContent);

        return $this->call('getProducts', self::wrapRequest($request));
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
        $request = new RequestObjectOfString($skus);

        return $this->call('GetStockLevelsBySKUList', self::wrapRequest($request));
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

        return $this->call('getProductByBarcode', self::wrapRequest($request));
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

        return $this->call('getProductByExternalProductId', self::wrapRequest($request));
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

        return $this->call('getProductByID', self::wrapRequest($request));
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

        return $this->call('getProductByManufacturerSKU', self::wrapRequest($request));
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

        return $this->call('getProductImages', self::wrapRequest($request));
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
        $apiProduct->setBrandID(config('ccp.brand_id'));
        $request = new RequestObjectOfAPIProduct($apiProduct);

        $this->call("AddProduct", self::wrapRequest($request));
    }

}
