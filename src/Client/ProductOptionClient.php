<?php
namespace AKaa\CCPApi\Client;

use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfString;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfInt32;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfListOfString;

/**
 * ProductOptionClient class.
 * 
 * @extends CCPSoapClient
 */
class ProductOptionClient extends CCPSoapClient
{
	protected $servicepoint = "CCPApiProductOptionService.svc";
	
	public function getAvailableProductOptions()
	{
		$brand_id = config('ccpapi.brand_id');
		$request = new RequestObjectOfInt32($brand_id);
		
		return $this->ccpCall('getAvailableProductOptions', $request);
	}
	
	public function getOptionValues($option_id)
	{
		$request = new RequestObjectOfInt32($option_id);
		
		return $this->ccpCall('getOptionValues', $request);
	}
}