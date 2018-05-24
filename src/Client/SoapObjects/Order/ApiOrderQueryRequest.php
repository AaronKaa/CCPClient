<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order;

class ApiOrderQueryRequest
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $SalesChannnelID
     */
    protected $SalesChannnelID = 0;

    /**
     * @var int $Skip
     */
    protected $Skip = 0;

    /**
     * @var int $Take
     */
    protected $Take = 100;

    /**
     * @var apiCustomerType $CustomerType
     */
    protected $CustomerType = "TradeAndRetail";

    /**
     * @var int $NoOfDays
     */
    protected $NoOfDays = 1;


    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct($salesChannnelID)
    {
	    $this->setSalesChannnelID($salesChannnelID)
			 ->setBrandID(config('ccpapi.brand_id'));
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
     * @return ApiOrderQueryRequest
     */
    public function setBrandID($BrandID)
    {
        $this->BrandID = $BrandID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesChannnelID()
    {
        return $this->SalesChannnelID;
    }

    /**
     * @param int $SalesChannnelID
     * @return ApiOrderQueryRequest
     */
    public function setSalesChannnelID($SalesChannnelID)
    {
        $this->SalesChannnelID = $SalesChannnelID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSkip()
    {
        return $this->Skip;
    }

    /**
     * @param int $Skip
     * @return ApiOrderQueryRequest
     */
    public function setSkip($Skip)
    {
        $this->Skip = $Skip;
        return $this;
    }

    /**
     * @return int
     */
    public function getTake()
    {
        return $this->Take;
    }

    /**
     * @param int $Take
     * @return ApiOrderQueryRequest
     */
    public function setTake($Take)
    {
        $this->Take = $Take;
        return $this;
    }

    /**
     * @return apiCustomerType
     */
    public function getCustomerType()
    {
        return $this->CustomerType;
    }

    /**
     * @param apiCustomerType $CustomerType
     * @return ApiOrderQueryRequest
     */
    public function setCustomerType($CustomerType)
    {
        $this->CustomerType = $CustomerType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNoOfDays()
    {
        return $this->NoOfDays;
    }

    /**
     * @param int $NoOfDays
     * @return ApiOrderQueryRequest
     */
    public function setNoOfDays($NoOfDays)
    {
        $this->NoOfDays = $NoOfDays;
        return $this;
    }
}
