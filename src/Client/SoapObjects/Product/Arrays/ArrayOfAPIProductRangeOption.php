<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

class ArrayOfAPIProductRangeOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductRangeOption[] $APIProductRangeOption
     */
    protected $APIProductRangeOption = null;


    public function __construct()
    {
    }

    /**
     * @return APIProductRangeOption[]
     */
    public function getAPIProductRangeOption()
    {
        return $this->APIProductRangeOption;
    }

    /**
     * @param APIProductRangeOption[] $APIProductRangeOption
     * @return ArrayOfAPIProductRangeOption
     */
    public function setAPIProductRangeOption(array $APIProductRangeOption = null)
    {
        $this->APIProductRangeOption = $APIProductRangeOption;
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
        return isset($this->APIProductRangeOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductRangeOption
     */
    public function offsetGet($offset)
    {
        return $this->APIProductRangeOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductRangeOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProductRangeOption[] = $value;
        } else {
            $this->APIProductRangeOption[$offset] = $value;
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
        unset($this->APIProductRangeOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductRangeOption Return the current element
     */
    public function current()
    {
        return current($this->APIProductRangeOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProductRangeOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProductRangeOption);
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
        reset($this->APIProductRangeOption);
    }

    /**
     * Countable implementation
     *
     * @return APIProductRangeOption Return count of elements
     */
    public function count()
    {
        return count($this->APIProductRangeOption);
    }
}
