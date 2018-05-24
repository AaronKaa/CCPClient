<?php 
namespace AKaa\CCPApi\Client\SoapObjects\Product;

/**
 * APIProductGetProductListRequest class.
 */
class APIProductGetProductListRequest
{
    /**
     * @var int $Start
     */
    protected $Start = null;

    /**
     * @var int $End
     */
    protected $End = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @param int $Start
     * @param int $End
     * @param int $SalesChannelID
     */
    public function __construct($start = null, $end = null, $salesChannelID = null)
    {
      $this->Start = $start;
      $this->End = $end;
      $this->SalesChannelID = $salesChannelID;
    }

    /**
     * @return int
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param int $Start
     * @return APIProductGetProductListRequest
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return int
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param int $End
     * @return APIProductGetProductListRequest
     */
    public function setEnd($End)
    {
      $this->End = $End;
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
     * @return APIProductGetProductListRequest
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

}
