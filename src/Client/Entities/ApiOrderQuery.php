<?php

namespace AKaa\CCPApi\Client\Entities;

class ApiOrderQuery
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $Skip
     */
    protected $Skip = null;

    /**
     * @var int $Take
     */
    protected $Take = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var ArrayOfCustomerOrderStatusType $CustomerOrderStatusTypes
     */
    protected $CustomerOrderStatusTypes = null;

    /**
     * @param int $BrandID
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param int $Skip
     * @param int $Take
     * @param int $SalesChannelID
     */
    public function __construct($BrandID, \DateTime $StartDate = null, \DateTime $EndDate = null, $Skip = null, $Take = null, $SalesChannelID = 0)
    {
      $this->BrandID = $BrandID;
      
      $this->StartDate = is_null($StartDate) ? null : $StartDate->format(\DateTime::ATOM);
      $this->EndDate = is_null($EndDate) ? null : $EndDate->format(\DateTime::ATOM);
      $this->Skip = $Skip;
      $this->Take = $Take;
      $this->SalesChannelID = $SalesChannelID;
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
     * @return ApiOrderQuery
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ApiOrderQuery
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ApiOrderQuery
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return ApiOrderQuery
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
     * @return ApiOrderQuery
     */
    public function setTake($Take)
    {
      $this->Take = $Take;
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
     * @return ApiOrderQuery
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

    /**
     * @return ArrayOfCustomerOrderStatusType
     */
    public function getCustomerOrderStatusTypes()
    {
      return $this->CustomerOrderStatusTypes;
    }

    /**
     * @param ArrayOfCustomerOrderStatusType $CustomerOrderStatusTypes
     * @return ApiOrderQuery
     */
    public function setCustomerOrderStatusTypes($CustomerOrderStatusTypes)
    {
      $this->CustomerOrderStatusTypes = $CustomerOrderStatusTypes;
      return $this;
    }

}
