<?php
namespace AKaa\CCPApi\Client\Entities;

use AKaa\CCPApi\Client\SoapObjects\Product\Arrays\ArrayOfAPIProductRangeOption;
use AKaa\CCPApi\Client\SoapObjects\Product\Arrays\ArrayOfAPIProduct;

/**
 * APIProductRange class.
 */
class APIProductRange
{
    /**
     * @var int $ID
     */
    protected $ID = 0;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $CategoryID
     */
//     protected $CategoryID = 0;

    /**
     * @var string $Manufacturer
     */
//     protected $Manufacturer = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NeckShape
     */
//     protected $NeckShape = "";

    /**
     * @var boolean $EndOfLine
     */
//     protected $EndOfLine = false;

    /**
     * @var boolean $PreOrder
     */
//     protected $PreOrder = false;

    /**
     * @var int $Weight
     */
//     protected $Weight = 0;

    /**
     * @var \DateTime $LastStockCheck
     */
//     protected $LastStockCheck = null;

    /**
     * @var boolean $GroupBy
     */
//     protected $GroupBy = false;

    /**
     * @var int $WarehousePickOrder
     */
//     protected $WarehousePickOrder = null;

    /**
     * @var StatusID $StatusID
     */
//     protected $StatusID = "Enabled";

    /**
     * @var ArrayOfAPIProductRangeOption $options
     */
//     protected $options = null;

    /**
     * @var ArrayOfAPIProduct $products
     */
//     protected $products = null;

    /**
     * __construct function.
     * 
     * @access public
     * @param array $productrange_details (default: null)
     * @return void
     */
    public function __construct(array $productrange_details = null)
    {
		if ($productrange_details) {
            foreach ($productrange_details as $key => $value) {
                $setKey = 'set'.$key;
                $this->$setKey($value);
            }
        }
        
        //$this->products = new ArrayOfAPIProduct;
//         $this->options = new ArrayOfAPIProductRangeOption;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return APIProductRange
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
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
     * @return APIProductRange
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param int $CategoryID
     * @return APIProductRange
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
      return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     * @return APIProductRange
     */
    public function setManufacturer($Manufacturer)
    {
      $this->Manufacturer = $Manufacturer;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerSKU()
    {
      return $this->ManufacturerSKU;
    }

    /**
     * @param string $ManufacturerSKU
     * @return APIProductRange
     */
    public function setManufacturerSKU($ManufacturerSKU)
    {
      $this->ManufacturerSKU = $ManufacturerSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return APIProductRange
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNeckShape()
    {
      return $this->NeckShape;
    }

    /**
     * @param string $NeckShape
     * @return APIProductRange
     */
    public function setNeckShape($NeckShape)
    {
      $this->NeckShape = $NeckShape;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEndOfLine()
    {
      return $this->EndOfLine;
    }

    /**
     * @param boolean $EndOfLine
     * @return APIProductRange
     */
    public function setEndOfLine($EndOfLine)
    {
      $this->EndOfLine = $EndOfLine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreOrder()
    {
      return $this->PreOrder;
    }

    /**
     * @param boolean $PreOrder
     * @return APIProductRange
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param int $Weight
     * @return APIProductRange
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastStockCheck()
    {
      if ($this->LastStockCheck == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastStockCheck);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastStockCheck
     * @return APIProductRange
     */
    public function setLastStockCheck(\DateTime $LastStockCheck)
    {
      $this->LastStockCheck = $LastStockCheck->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGroupBy()
    {
      return $this->GroupBy;
    }

    /**
     * @param boolean $GroupBy
     * @return APIProductRange
     */
    public function setGroupBy($GroupBy)
    {
      $this->GroupBy = $GroupBy;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehousePickOrder()
    {
      return $this->WarehousePickOrder;
    }

    /**
     * @param int $WarehousePickOrder
     * @return APIProductRange
     */
    public function setWarehousePickOrder($WarehousePickOrder)
    {
      $this->WarehousePickOrder = $WarehousePickOrder;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param StatusID $StatusID
     * @return APIProductRange
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return ArrayOfAPIProductRangeOption
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param ArrayOfAPIProductRangeOption $options
     * @return APIProductRange
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return ArrayOfAPIProduct
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfAPIProduct $products
     * @return APIProductRange
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
