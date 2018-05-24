<?php
namespace AKaa\CCPApi\Client;

/**
 * OrderClient class.
 *
 * @extends CCPSoapClient
 */
class OrderClient extends CCPSoapClient
{
    protected $servicepoint = "CCPApiOrderService.svc";
    
    public function getOrders ()
    {
	    return $this->ccpCall('getOrders', $request);
    }
    
    public function getInvoiceSummaryForOrderID  ()
    {
	    return $this->ccpCall('getInvoiceSummaryForOrderID ', $request);
    }
    
    public function getOrderById ()
    {
	    return $this->ccpCall('getOrderById', $request);
    }
    
    public function getOrderDetailsById ()
    {
	    return $this->ccpCall('getOrderDetailsById', $request);
    }
    
    public function getOrderDetailsByReference ()
    {
	    return $this->ccpCall('getOrderDetailsByReference', $request);
    }
    
    public function getOrdersForDispatch ()
    {
	    return $this->ccpCall('getOrdersForDispatch', $request);
    }
    
    public function getPriorityOrders ()
    {
	    return $this->ccpCall('getPriorityOrders', $request);
    }
    
    public function getPrintedOrders ()
    {
	    return $this->ccpCall('getPrintedOrders', $request);
    }
    
    public function getNotPrintedOrders ()
    {
	    return $this->ccpCall('getNotPrintedOrders', $request);
    }
    
    public function getAllocatedOrders ()
    {
	    return $this->ccpCall('getAllocatedOrders', $request);
    }
    
    public function getUnallocatedOrders ()
    {
	    return $this->ccpCall('getUnallocatedOrders', $request);
    }
    
    public function getPickedOrders ()
    {
	    return $this->ccpCall('getPickedOrders', $request);
    }
    
    public function getNotPickedOrders ()
    {
	    return $this->ccpCall('getNotPickedOrders', $request);
    }
    
    public function getCompletedOrdersNoOfDays ()
    {
	    return $this->ccpCall('getCompletedOrdersNoOfDays', $request);
    }
    
    public function getUnprocessedOrders ()
    {
	    return $this->ccpCall('getUnprocessedOrders', $request);
    }
        
    public function createOrder ()
    {
	    return $this->ccpCall('createOrder', $request);
    }
    
    public function SubmitOrder ()
    {
	    return $this->ccpCall('SubmitOrder', $request);
    }
    
    public function setPickListPrinted ()
    {
	    return $this->ccpCall('setPickListPrinted', $request);
    }
    
    public function markOrderAsPicked ()
    {
	    return $this->ccpCall('markOrderAsPicked', $request);
    }
    
    public function setPickStatus ()
    {
	    return $this->ccpCall('setPickStatus', $request);
    }
    
    public function DispatchOrder ()
    {
	    return $this->ccpCall('DispatchOrder', $request);
    }
    
    public function GetShippingRules ()
    {
	    return $this->ccpCall('GetShippingRules', $request);
    }

}
