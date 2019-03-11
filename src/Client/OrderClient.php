<?php
namespace AKaa\CCPApi\Client;

use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfString;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfInt32;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfListOfString;

use AKaa\CCPApi\Client\SoapObjects\Order\Request\RequestObjectOfAPIGetOrdersRequest;
use AKaa\CCPApi\Client\SoapObjects\Order\Request\APIGetOrdersRequest;
use AKaa\CCPApi\Client\SoapObjects\Order\Request\RequestObjectOfApiOrderQueryRequest;

use AKaa\CCPApi\Client\Entities\ApiOrderQuery;
use AKaa\CCPApi\Client\Entities\ApiOrderQueryRequest;

use Carbon\Carbon;

/**
 * OrderClient class.
 *
 * @extends CCPSoapClient
 */
class OrderClient extends CCPSoapClient
{
    protected $servicepoint = "CCPApiOrderService.svc";

    /**
     * getOrders function.
     *
     * @access public
     * @param mixed $date (default: null)
     * @param string $customer_type (default: "TradeAndRetail")
     * @param mixed $priority (default: null)
     * @param mixed $order_type (default: null)
     * @param int $no_of_days (default: 1)
     * @return void
     */
    public function getOrders(
        $date = null,
        $customer_type = null,
        $priority = null,
        $order_type = null,
        $no_of_days = null
    ) {

        $getOrdersRequest = new APIGetOrdersRequest();

        $getOrdersRequest->setDtFilter($date ?? date(DATE_ATOM))
                        ->setNumberofdays($no_of_days)
                        ->setIntBrandID(config('ccpapi.brand_id'));

        $request = new RequestObjectOfAPIGetOrdersRequest($getOrdersRequest);

        return $this->ccpCall('getOrders', $request);
    }

    /**
     * getOrderStatusTypes function.
     *
     * @access public
     * @return void
     */
    public function getOrderStatusTypes()
    {
        $types = [
                    'ready',
                    'picked',
                    'picking',
                    'packed',
                    'packing',
                    'shipped',
                    'partiallyshipped',
                    'dropshipdetected',
                    'dropshipemailsent',
                    'advanceddropshipemailsent',
                    'DeliveryAddressChange',
                    'BillingAddressChange',
                    'ShippingRuleChange',
                    'StatusDescriptionChange',
                    'DispatchDateChange',
                    'Paid',
                    'Created',
                    'Edited',
                    'Unallocated',
                    'Cancelled',
                    'Allocated',
                    'Returned',
                    'Ignored',
                    'Refunded'];

        return $types;
    }

    /**
     * search function.
     *
     * @access public
     * @param mixed $start_date (default: null)
     * @return void
     */
    public function search(
        $start_date = null,
        $end_date = null,
        $skip = 0,
        $take = 1000,
        $sales_channel_id = 0,
        $customer_order_status_types = null
    ) {


	    if(is_null($customer_order_status_types)){
		    $customer_order_status_types = $this->getOrderStatusTypes();
	    }

        $orderQuery = new ApiOrderQuery(config('ccpapi.brand_id'));
        $orderQuery->setStartDate($start_date ?? Carbon::now()->subDay())
                ->setEndDate($end_date ?? $start_date->addDay())
                ->setSkip($skip)
                ->setTake($take)
                ->setSalesChannelID($sales_channel_id)
                ->setCustomerOrderStatusTypes('Created,ready,shipped,picked,picking,packed');

        $request = new RequestObjectOfApiOrderQueryRequest($orderQuery);
        return $this->ccpCall('Search', $request);
    }
    
    public function getDespatchedOrders(
        $start_date = null,
        $end_date = null,
        $skip = 0,
        $take = 1000,
        $sales_channel_id = 0,
        $customer_order_status_types = null
    ) {
		
		if(is_null($start_date)){
			$start_date = Carbon::now()->subDay();
		}
		
	    if(is_null($customer_order_status_types)){
		    $customer_order_status_types = $this->getOrderStatusTypes();
	    }

        $orderQuery = new ApiOrderQuery(config('ccpapi.brand_id'));
        $orderQuery->setStartDate($start_date)
                ->setEndDate($end_date ?? $start_date->addHours(12))
                ->setSkip($skip)
                ->setTake($take)
                ->setSalesChannelID($sales_channel_id)
                ->setCustomerOrderStatusTypes('Created,ready,shipped,picked,picking,packed');

        $request = new RequestObjectOfApiOrderQueryRequest($orderQuery);
        return $this->ccpCall('GetDispatchedOrders', $request);
    }

    /**
     * getCompletedOrdersNoOfDays function.
     * 
     * @access public
     * @return void
     */
    public function getCompletedOrdersNoOfDays($skip = 0, $take = 50, $no_of_days = 50)
    {
	    $orderQuery = new ApiOrderQueryRequest(config('ccpapi.brand_id'));
        $orderQuery->setSkip($skip)
                ->setTake($take)
                ->setNoOfDays($no_of_days);
               // ->setCustomerOrderStatusTypes('Created,ready,shipped,picked,picking,packed');

        $request = new RequestObjectOfApiOrderQueryRequest($orderQuery);
        
        return $this->ccpCall('getCompletedOrdersNoOfDays', $request);
    }

    /**
     * getInvoiceSummaryForOrderID function.
     *
     * @access public
     * @param mixed $order_id
     * @return void
     */
    public function getInvoiceSummaryForOrderID($order_id)
    {
        $request = new RequestObjectOfInt32($order_id);

        return $this->ccpCall('getInvoiceSummaryForOrderID ', $request);
    }

    /**
     * getOrderById function.
     *
     * @access public
     * @param mixed $order_id
     * @return void
     */
    public function getOrderById($order_id)
    {
        $request = new RequestObjectOfInt32($order_id);

        return $this->ccpCall('getOrderById', $request);
    }

    /**
     * getOrderDetailsById function.
     *
     * @access public
     * @param mixed $order_id
     * @return void
     */
    public function getOrderDetailsById($order_id)
    {
        $request = new RequestObjectOfInt32($order_id);

        return $this->ccpCall('getOrderDetailsById', $request);
    }

    /**
     * getOrderDetailsByReference function.
     *
     * @access public
     * @param mixed $reference
     * @return void
     */
    public function getOrderDetailsByReference($reference)
    {
        $request = new RequestObjectOfString($reference);

        return $this->ccpCall('getOrderDetailsByReference', $request);
    }
    
    //

    public function getOrdersForDispatch()
    {
        return $this->ccpCall('getOrdersForDispatch', $request);
    }

    public function getPriorityOrders()
    {
        return $this->ccpCall('getPriorityOrders', $request);
    }

    public function getPrintedOrders()
    {
        return $this->ccpCall('getPrintedOrders', $request);
    }

    public function getNotPrintedOrders()
    {
        return $this->ccpCall('getNotPrintedOrders', $request);
    }

    public function getAllocatedOrders()
    {
        return $this->ccpCall('getAllocatedOrders', $request);
    }

    public function getUnallocatedOrders()
    {
        return $this->ccpCall('getUnallocatedOrders', $request);
    }

    public function getPickedOrders()
    {
        return $this->ccpCall('getPickedOrders', $request);
    }

    public function getNotPickedOrders()
    {
        return $this->ccpCall('getNotPickedOrders', $request);
    }

    public function getUnprocessedOrders()
    {
        return $this->ccpCall('getUnprocessedOrders', $request);
    }

    public function createOrder()
    {
        return $this->ccpCall('createOrder', $request);
    }

    public function SubmitOrder()
    {
        return $this->ccpCall('SubmitOrder', $request);
    }

    public function setPickListPrinted()
    {
        return $this->ccpCall('setPickListPrinted', $request);
    }

    public function markOrderAsPicked()
    {
        return $this->ccpCall('markOrderAsPicked', $request);
    }

    public function setPickStatus()
    {
        return $this->ccpCall('setPickStatus', $request);
    }

    public function DispatchOrder()
    {
        return $this->ccpCall('DispatchOrder', $request);
    }

    public function GetShippingRules()
    {
        return $this->ccpCall('GetShippingRules', $request);
    }
}
