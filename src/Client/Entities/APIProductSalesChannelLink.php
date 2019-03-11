<?php

namespace AKaa\CCPApi\Client\Entities;

class APIProductSalesChannelLink
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $ProductRangeID
     */
    protected $ProductRangeID = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $VATRateID
     */
    protected $VATRateID = null;

    /**
     * @param int $ID
     * @param int $BrandID
     * @param int $ProductRangeID
     * @param int $SalesChannelID
     * @param int $ProductID
     * @param float $Price
     * @param int $VATRateID
     */
    public function __construct()
    {

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
     * @return APIProductSalesChannelLink
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
     * @return APIProductSalesChannelLink
     */
    public function setBrandID($BrandID)
    {
        $this->BrandID = $BrandID;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductRangeID()
    {
        return $this->ProductRangeID;
    }

    /**
     * @param int $ProductRangeID
     * @return APIProductSalesChannelLink
     */
    public function setProductRangeID($ProductRangeID)
    {
        $this->ProductRangeID = $ProductRangeID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesChannelID()
    {
        return $this->SalesChannelID;
    }

    /**
     * @param int $SalesChannelID
     * @return APIProductSalesChannelLink
     */
    public function setSalesChannelID($SalesChannelID)
    {
        $this->SalesChannelID = $SalesChannelID;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return APIProductSalesChannelLink
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
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
     * @return APIProductSalesChannelLink
     */
    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return APIProductSalesChannelLink
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @return int
     */
    public function getVATRateID()
    {
        return $this->VATRateID;
    }

    /**
     * @param int $VATRateID
     * @return APIProductSalesChannelLink
     */
    public function setVATRateID($VATRateID)
    {
        $this->VATRateID = $VATRateID;
        return $this;
    }
}
