<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfCcpApiDispatchItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ccpApiDispatchItem[] $ccpApiDispatchItem
     */
    protected $ccpApiDispatchItem = null;


    public function __construct()
    {
    }

    /**
     * @return ccpApiDispatchItem[]
     */
    public function getCcpApiDispatchItem()
    {
        return $this->ccpApiDispatchItem;
    }

    /**
     * @param ccpApiDispatchItem[] $ccpApiDispatchItem
     * @return ArrayOfCcpApiDispatchItem
     */
    public function setCcpApiDispatchItem(array $ccpApiDispatchItem = null)
    {
        $this->ccpApiDispatchItem = $ccpApiDispatchItem;
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
        return isset($this->ccpApiDispatchItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ccpApiDispatchItem
     */
    public function offsetGet($offset)
    {
        return $this->ccpApiDispatchItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ccpApiDispatchItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ccpApiDispatchItem[] = $value;
        } else {
            $this->ccpApiDispatchItem[$offset] = $value;
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
        unset($this->ccpApiDispatchItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ccpApiDispatchItem Return the current element
     */
    public function current()
    {
        return current($this->ccpApiDispatchItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ccpApiDispatchItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ccpApiDispatchItem);
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
        reset($this->ccpApiDispatchItem);
    }

    /**
     * Countable implementation
     *
     * @return ccpApiDispatchItem Return count of elements
     */
    public function count()
    {
        return count($this->ccpApiDispatchItem);
    }
}
