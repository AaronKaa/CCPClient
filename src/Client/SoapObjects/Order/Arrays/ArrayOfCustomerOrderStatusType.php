<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfCustomerOrderStatusType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomerOrderStatusType[] $CustomerOrderStatusType
     */
    protected $CustomerOrderStatusType = null;


    public function __construct()
    {
    }

    /**
     * @return CustomerOrderStatusType[]
     */
    public function getCustomerOrderStatusType()
    {
        return $this->CustomerOrderStatusType;
    }

    /**
     * @param CustomerOrderStatusType[] $CustomerOrderStatusType
     * @return ArrayOfCustomerOrderStatusType
     */
    public function setCustomerOrderStatusType(array $CustomerOrderStatusType = null)
    {
        $this->CustomerOrderStatusType = $CustomerOrderStatusType;
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
        return isset($this->CustomerOrderStatusType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerOrderStatusType
     */
    public function offsetGet($offset)
    {
        return $this->CustomerOrderStatusType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerOrderStatusType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->CustomerOrderStatusType[] = $value;
        } else {
            $this->CustomerOrderStatusType[$offset] = $value;
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
        unset($this->CustomerOrderStatusType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomerOrderStatusType Return the current element
     */
    public function current()
    {
        return current($this->CustomerOrderStatusType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CustomerOrderStatusType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CustomerOrderStatusType);
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
        reset($this->CustomerOrderStatusType);
    }

    /**
     * Countable implementation
     *
     * @return CustomerOrderStatusType Return count of elements
     */
    public function count()
    {
        return count($this->CustomerOrderStatusType);
    }
}
