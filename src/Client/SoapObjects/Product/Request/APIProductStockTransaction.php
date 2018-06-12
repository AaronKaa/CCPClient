<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Request;

/**
 * APIProductStockTransaction class.
 */
class APIProductStockTransaction
{

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;


    /**
     * __construct function.
     * 
     * @access public
     * @param mixed $identifier (default: null)
     * @param mixed $quantity (default: null)
     * @param string $type (default: "id") ["id","sku","code"
     * @return void
     */
    public function __construct($identifier = null,$quantity = null, $reason = null, $type = "id")
    {
	    switch($type){
		    case "id":
		    	$this->setProductID($identifier);
		    break;
		    case "sku":
		    	$this->setSKU($identifier);
		    break;
		    case "code":
		    	$this->setProductCode($identifier);
		    break;
	    }
	    
	    $this->setQuantity($quantity);
	    $this->setReason($reason);
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
     * @return APIProductStockTransaction
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
     * @return APIProductStockTransaction
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return APIProductStockTransaction
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return APIProductStockTransaction
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return APIProductStockTransaction
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
