<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfCcpCustomerOrderItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ccpCustomerOrderItem[] $ccpCustomerOrderItem
     */
    protected $ccpCustomerOrderItem = null;

    public function __construct()
    {
    }

    /**
     * @return ccpCustomerOrderItem[]
     */
    public function getCcpCustomerOrderItem()
    {
        return $this->ccpCustomerOrderItem;
    }

    /**
     * @param ccpCustomerOrderItem[] $ccpCustomerOrderItem
     * @return ArrayOfCcpCustomerOrderItem
     */
    public function setCcpCustomerOrderItem(array $ccpCustomerOrderItem = null)
    {
        $this->ccpCustomerOrderItem = $ccpCustomerOrderItem;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->ccpCustomerOrderItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ccpCustomerOrderItem
     */
    public function offsetGet($offset)
    {
        return $this->ccpCustomerOrderItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ccpCustomerOrderItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ccpCustomerOrderItem[] = $value;
        } else {
            $this->ccpCustomerOrderItem[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->ccpCustomerOrderItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ccpCustomerOrderItem Return the current element
     */
    public function current()
    {
        return current($this->ccpCustomerOrderItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ccpCustomerOrderItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ccpCustomerOrderItem);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->ccpCustomerOrderItem);
    }

    /**
     * Countable implementation
     *
     * @return ccpCustomerOrderItem Return count of elements
     */
    public function count()
    {
        return count($this->ccpCustomerOrderItem);
    }
}
