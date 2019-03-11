<?php

namespace AKaa\CCPApi\Client\Entities;

class APISalesChannelLinkbak
{

    /**
     * @var int $linkID
     */
    protected $linkID = null;

    /**
     * @var int $channelID
     */
    protected $channelID = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $VATRateId
     */
    protected $VATRateId = null;

    /**
     * @var float $NetPrice
     */
    protected $NetPrice = null;

    /**
     * @var float $GrossPrice
     */
    protected $GrossPrice = null;

    /**
     * @var float $VATRate
     */
    protected $VATRate = null;

    /**
     * @param int $linkID
     * @param int $channelID
     * @param int $VATRateId
     * @param float $NetPrice
     * @param float $GrossPrice
     * @param float $VATRate
     */
    public function __construct($linkID, $channelID, $VATRateId, $NetPrice, $GrossPrice, $VATRate)
    {
      $this->linkID = $linkID;
      $this->channelID = $channelID;
      $this->VATRateId = $VATRateId;
      $this->NetPrice = $NetPrice;
      $this->GrossPrice = $GrossPrice;
      $this->VATRate = $VATRate;
    }

    /**
     * @return int
     */
    public function getLinkID()
    {
      return $this->linkID;
    }

    /**
     * @param int $linkID
     * @return APISalesChannelLink
     */
    public function setLinkID($linkID)
    {
      $this->linkID = $linkID;
      return $this;
    }

    /**
     * @return int
     */
    public function getChannelID()
    {
      return $this->channelID;
    }

    /**
     * @param int $channelID
     * @return APISalesChannelLink
     */
    public function setChannelID($channelID)
    {
      $this->channelID = $channelID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return APISalesChannelLink
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getVATRateId()
    {
      return $this->VATRateId;
    }

    /**
     * @param int $VATRateId
     * @return APISalesChannelLink
     */
    public function setVATRateId($VATRateId)
    {
      $this->VATRateId = $VATRateId;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
      return $this->NetPrice;
    }

    /**
     * @param float $NetPrice
     * @return APISalesChannelLink
     */
    public function setNetPrice($NetPrice)
    {
      $this->NetPrice = $NetPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossPrice()
    {
      return $this->GrossPrice;
    }

    /**
     * @param float $GrossPrice
     * @return APISalesChannelLink
     */
    public function setGrossPrice($GrossPrice)
    {
      $this->GrossPrice = $GrossPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATRate()
    {
      return $this->VATRate;
    }

    /**
     * @param float $VATRate
     * @return APISalesChannelLink
     */
    public function setVATRate($VATRate)
    {
      $this->VATRate = $VATRate;
      return $this;
    }

}
