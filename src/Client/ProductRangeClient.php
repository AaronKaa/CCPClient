<?php
namespace AKaa\CCPApi\Client;

use AKaa\CCPApi\Client\Entities\APIProductRange;

use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfInt32;
use AKaa\CCPApi\Client\SoapObjects\Types\ServiceRequestObjectOfString;

use AKaa\CCPApi\Client\SoapObjects\Product\Request\RequestObjectOfAPIProductRange;

/**
 * ProductRangeClient class.
 * 
 * @extends CCPSoapClient
 */
class ProductRangeClient extends CCPSoapClient
{
    protected $servicepoint = "CCPApiProductRangeService.svc";

    /**
     * addProductRange function.
     *
     * @access public
     * @param array $productrange_details
     * @return void
     */
    public function addProductRange(array $productrange_details)
    {
        $productRange = new APIProductRange($productrange_details);
        $request = new RequestObjectOfAPIProductRange($productRange);
        return $this->ccpCall('addProductRange', $request);
    }

    /**
     * getProductRanges function.
     * 
     * @access public
     * @return void
     */
    public function getProductRanges()
    {
		$request = new ServiceRequestObjectOfString();
		
        return $this->ccpCall('getProductRanges', $request);
    }

    /**
     * @param getDeletedProductRanges $request
     * @return getDeletedProductRangesResponse
     */
    public function getDeletedProductRanges(getDeletedProductRanges $request)
    {
        return $this->ccpCall('getDeletedProductRanges', $request);
    }

    /**
     * getProductRangeById function.
     * 
     * @access public
     * @param mixed $id
     * @return void
     */
    public function getProductRangeById($id)
    {
	    $request = new RequestObjectOfInt32($id);
	    
        return $this->ccpCall('getProductRangeById', $request);
    }

    /**
     * @param updateProductRange $request
     * @return updateProductRangeResponse
     */
    public function updateProductRange(updateProductRange $request)
    {
        return $this->ccpCall('updateProductRange', $request);
    }

    /**
     * @param setManufacturerSKU $request
     * @return setManufacturerSKUResponse
     */
    public function setManufacturerSKU(setManufacturerSKU $request)
    {
        return $this->ccpCall('setManufacturerSKU', $request);
    }

    /**
     * @param setName $request
     * @return setNameResponse
     */
    public function setName(setName $request)
    {
        return $this->ccpCall('setName', $request);
    }

    /**
     * @param setNeckShape $request
     * @return setNeckShapeResponse
     */
    public function setNeckShape(setNeckShape $request)
    {
        return $this->ccpCall('setNeckShape', $request);
    }

    /**
     * @param setEndOfLine $request
     * @return setEndOfLineResponse
     */
    public function setEndOfLine(setEndOfLine $request)
    {
        return $this->ccpCall('setEndOfLine', $request);
    }

    /**
     * @param setPreOrder $request
     * @return setPreOrderResponse
     */
    public function setPreOrder(setPreOrder $request)
    {
        return $this->ccpCall('setPreOrder', $request);
    }

    /**
     * @param setLastStockCheck $request
     * @return setLastStockCheckResponse
     */
    public function setLastStockCheck(setLastStockCheck $request)
    {
        return $this->ccpCall('setLastStockCheck', $request);
    }

    /**
     * @param setGroupBy $request
     * @return setGroupByResponse
     */
    public function setGroupBy(setGroupBy $request)
    {
        return $this->ccpCall('setGroupBy', $request);
    }

    /**
     * @param setWarehousePickOrder $request
     * @return setWarehousePickOrderResponse
     */
    public function setWarehousePickOrder(setWarehousePickOrder $request)
    {
        return $this->ccpCall('setWarehousePickOrder', $request);
    }

    public function setStatus($sku,$status)
    {   
	    $productRangeData = [
		    "ManufacturerSKU" => $sku,
		    "Status" => $status
	    ];
	    
	    $productRange = new APIProductRange($productRangeData);
	    $request = new RequestObjectOfAPIProductRange($productRange);
	    
        return $this->ccpCall('setStatus', $request);
    }

    /**
     * @param deleteProductRange $request
     * @return deleteProductRangeResponse
     */
    public function deleteProductRange(deleteProductRange $request)
    {
        return $this->ccpCall('deleteProductRange', $request);
    }

    /**
     * @param addRangeOptionLink $request
     * @return addRangeOptionLinkResponse
     */
    public function addRangeOptionLink(addRangeOptionLink $request)
    {
        return $this->ccpCall('addRangeOptionLink', $request);
    }

    /**
     * @param removeRangeOptionLink $request
     * @return removeRangeOptionLinkResponse
     */
    public function removeRangeOptionLink(removeRangeOptionLink $request)
    {
        return $this->ccpCall('removeRangeOptionLink', $request);
    }
}
