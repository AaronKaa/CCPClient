<?php

namespace AKaa\CCPApi\Client\SoapObjects\Order\Request;

class APIGetOrdersRequest
{

    /**
     * @var int $intBrandID
     */
    protected $intBrandID = null;

    /**
     * @var \DateTime $dtFilter
     */
    protected $dtFilter = null;

    /**
     * @var string $strCustType
     */
    protected $strCustType = null;

    /**
     * @var string $strPriority
     */
    protected $strPriority = null;

    /**
     * @var string $strOrderType
     */
    protected $strOrderType = null;

    /**
     * @var int $numberofdays
     */
    protected $numberofdays = 1;

    /**
     * @var boolean $showUnallocated
     */
    protected $showUnallocated = true;

    /**
     * @param int $intBrandID
     * @param \DateTime $dtFilter
     * @param int $numberofdays
     * @param boolean $showUnallocated
     */
    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getIntBrandID()
    {
        return $this->intBrandID;
    }

    /**
     * @param int $intBrandID
     * @return APIGetOrdersRequest
     */
    public function setIntBrandID($intBrandID)
    {
        $this->intBrandID = $intBrandID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtFilter()
    {
        if ($this->dtFilter == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtFilter);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtFilter
     * @return APIGetOrdersRequest
     */
    public function setDtFilter($dtFilter)
    {
        $this->dtFilter = $dtFilter;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrCustType()
    {
        return $this->strCustType;
    }

    /**
     * @param string $strCustType
     * @return APIGetOrdersRequest
     */
    public function setStrCustType($strCustType)
    {
        $this->strCustType = $strCustType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrPriority()
    {
        return $this->strPriority;
    }

    /**
     * @param string $strPriority
     * @return APIGetOrdersRequest
     */
    public function setStrPriority($strPriority)
    {
        $this->strPriority = $strPriority;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrOrderType()
    {
        return $this->strOrderType;
    }

    /**
     * @param string $strOrderType
     * @return APIGetOrdersRequest
     */
    public function setStrOrderType($strOrderType)
    {
        $this->strOrderType = $strOrderType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberofdays()
    {
        return $this->numberofdays;
    }

    /**
     * @param int $numberofdays
     * @return APIGetOrdersRequest
     */
    public function setNumberofdays($numberofdays)
    {
        $this->numberofdays = $numberofdays;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowUnallocated()
    {
        return $this->showUnallocated;
    }

    /**
     * @param boolean $showUnallocated
     * @return APIGetOrdersRequest
     */
    public function setShowUnallocated($showUnallocated)
    {
        $this->showUnallocated = $showUnallocated;
        return $this;
    }
}
