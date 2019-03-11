<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Request;

class APIProductWarehouseBayStockMovement
{

    /**
     * @var APIWarehouseDetails $Warehouse
     */
    protected $Warehouse = null;

    /**
     * @var APIWarehouseBay $WarehouseBay
     */
    protected $WarehouseBay = null;

    /**
     * @var APIProduct $Product
     */
    protected $Product = null;

    /**
     * @var int $CurrentStockInBay
     */
    protected $CurrentStockInBay = null;

    /**
     * @param int $CurrentStockInBay
     */
    public function __construct($CurrentStockInBay)
    {
      $this->CurrentStockInBay = $CurrentStockInBay;
    }

    /**
     * @return APIWarehouseDetails
     */
    public function getWarehouse()
    {
      return $this->Warehouse;
    }

    /**
     * @param APIWarehouseDetails $Warehouse
     * @return APIProductWarehouseBayStockMovement
     */
    public function setWarehouse($Warehouse)
    {
      $this->Warehouse = $Warehouse;
      return $this;
    }

    /**
     * @return APIWarehouseBay
     */
    public function getWarehouseBay()
    {
      return $this->WarehouseBay;
    }

    /**
     * @param APIWarehouseBay $WarehouseBay
     * @return APIProductWarehouseBayStockMovement
     */
    public function setWarehouseBay($WarehouseBay)
    {
      $this->WarehouseBay = $WarehouseBay;
      return $this;
    }

    /**
     * @return APIProduct
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param APIProduct $Product
     * @return APIProductWarehouseBayStockMovement
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentStockInBay()
    {
      return $this->CurrentStockInBay;
    }

    /**
     * @param int $CurrentStockInBay
     * @return APIProductWarehouseBayStockMovement
     */
    public function setCurrentStockInBay($CurrentStockInBay)
    {
      $this->CurrentStockInBay = $CurrentStockInBay;
      return $this;
    }

}
