<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPIProductStockLevel class.
 */
class ArrayOfAPIProductStockLevel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductStockLevel[] $APIProductStockLevel
     */
    protected $APIProductStockLevel = null;


    public function __construct()
    {
    }

    /**
     * @return APIProductStockLevel[]
     */
    public function getAPIProductStockLevel()
    {
        return $this->APIProductStockLevel;
    }

    /**
     * @param APIProductStockLevel[] $APIProductStockLevel
     * @return ArrayOfAPIProductStockLevel
     */
    public function setAPIProductStockLevel(array $APIProductStockLevel = null)
    {
        $this->APIProductStockLevel = $APIProductStockLevel;
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
        return isset($this->APIProductStockLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductStockLevel
     */
    public function offsetGet($offset)
    {
        return $this->APIProductStockLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductStockLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProductStockLevel[] = $value;
        } else {
            $this->APIProductStockLevel[$offset] = $value;
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
        unset($this->APIProductStockLevel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductStockLevel Return the current element
     */
    public function current()
    {
        return current($this->APIProductStockLevel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProductStockLevel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProductStockLevel);
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
        reset($this->APIProductStockLevel);
    }

    /**
     * Countable implementation
     *
     * @return APIProductStockLevel Return count of elements
     */
    public function count()
    {
        return count($this->APIProductStockLevel);
    }
}
