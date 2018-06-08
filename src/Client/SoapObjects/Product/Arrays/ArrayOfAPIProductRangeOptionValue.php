<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPIProductRangeOptionValue class.
 */
class ArrayOfAPIProductRangeOptionValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductRangeOptionValue[] $APIProductRangeOptionValue
     */
    protected $APIProductRangeOptionValue = null;


    public function __construct()
    {
    }

    /**
     * @return APIProductRangeOptionValue[]
     */
    public function getAPIProductRangeOptionValue()
    {
        return $this->APIProductRangeOptionValue;
    }

    /**
     * @param APIProductRangeOptionValue[] $APIProductRangeOptionValue
     * @return ArrayOfAPIProductRangeOptionValue
     */
    public function setAPIProductRangeOptionValue(array $APIProductRangeOptionValue = null)
    {
        $this->APIProductRangeOptionValue = $APIProductRangeOptionValue;
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
        return isset($this->APIProductRangeOptionValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductRangeOptionValue
     */
    public function offsetGet($offset)
    {
        return $this->APIProductRangeOptionValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductRangeOptionValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProductRangeOptionValue[] = $value;
        } else {
            $this->APIProductRangeOptionValue[$offset] = $value;
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
        unset($this->APIProductRangeOptionValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductRangeOptionValue Return the current element
     */
    public function current()
    {
        return current($this->APIProductRangeOptionValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProductRangeOptionValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProductRangeOptionValue);
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
        reset($this->APIProductRangeOptionValue);
    }

    /**
     * Countable implementation
     *
     * @return APIProductRangeOptionValue Return count of elements
     */
    public function count()
    {
        return count($this->APIProductRangeOptionValue);
    }
}
