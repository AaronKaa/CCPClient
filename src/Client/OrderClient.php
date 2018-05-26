<?php
namespace AKaa\CCPApi\Client;

use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfString;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfInt32;
use AKaa\CCPApi\Client\SoapObjects\Types\RequestObjectOfListOfString;

use AKaa\CCPApi\Client\SoapObjects\Order\RequestObjectOfAPIGetOrdersRequest;
use AKaa\CCPApi\Client\SoapObjects\Order\APIGetOrdersRequest;

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
    public function getOrders($date = null, $customer_type = "TradeAndRetail", $priority = "Exported", $order_type = "Undispatched", $no_of_days = 1)
    {
        $getOrdersRequest = new APIGetOrdersRequest();

        $getOrdersRequest->setDtFilter($date ?? date(DATE_ATOM)
                        ->setStrCustType($customer_type)
                        ->setNumberofdays($no_of_days)
                        ->setStrPriority($priority)
                        ->setStrOrderType($order_type);

        $request = new RequestObjectOfAPIGetOrdersRequest($getOrdersRequest);

        return $this->ccpCall('getOrders', $request);
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

    public function getCompletedOrdersNoOfDays()
    {
        return $this->ccpCall('getCompletedOrdersNoOfDays', $request);
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
