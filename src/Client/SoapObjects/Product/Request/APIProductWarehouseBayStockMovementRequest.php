<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Request;

class APIProductWarehouseBayStockMovementRequest
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $WarehouseID
     */
    protected $WarehouseID = null;

    /**
     * @var string $BayCode
     */
    protected $BayCode = null;

    /**
     * @var string $MoveToBayCode
     */
    protected $MoveToBayCode = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var boolean $GetStock
     */
    protected $GetStock = false;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var ArrayOfAPIStockChange $stockToAdd
     */
    protected $stockToAdd = null;

    /**
     * @param int $BrandID
     * @param int $WarehouseID
     * @param boolean $GetStock
     * @param int $OrderID
     */
    public function __construct($warehouseID, $getStock, $orderID)
    {
      $this->WarehouseID = $warehouseID;
      $this->GetStock = $getStock;
      $this->OrderID = $orderID;
    }

    /**
     * @return int
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param int $BrandID
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setBrandID($brandID)
    {
      $this->BrandID = $brandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param int $WarehouseID
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setWarehouseID($warehouseID)
    {
      $this->WarehouseID = $warehouseID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBayCode()
    {
      return $this->BayCode;
    }

    /**
     * @param string $BayCode
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setBayCode($bayCode)
    {
      $this->BayCode = $bayCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMoveToBayCode()
    {
      return $this->MoveToBayCode;
    }

    /**
     * @param string $MoveToBayCode
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setMoveToBayCode($moveToBayCode)
    {
      $this->MoveToBayCode = $moveToBayCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setSKU($sku)
    {
      $this->SKU = $sku;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetStock()
    {
      return $this->GetStock;
    }

    /**
     * @param boolean $GetStock
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setGetStock($getStock)
    {
      $this->GetStock = $getStock;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setOrderID($orderID)
    {
      $this->OrderID = $orderID;
      return $this;
    }

    /**
     * @return ArrayOfAPIStockChange
     */
    public function getStockToAdd()
    {
      return $this->stockToAdd;
    }

    /**
     * @param ArrayOfAPIStockChange $stockToAdd
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setStockToAdd($stockToAdd)
    {
      $this->stockToAdd = $stockToAdd;
      return $this;
    }

}
