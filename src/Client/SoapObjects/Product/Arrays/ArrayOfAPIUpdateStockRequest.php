<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPIUpdateStockRequest class.
 */
class ArrayOfAPIUpdateStockRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIUpdateStockRequest[] $APIUpdateStockRequest
     */
    protected $APIUpdateStockRequest = null;


    public function __construct()
    {
    }

    /**
     * @return APIUpdateStockRequest[]
     */
    public function getAPIUpdateStockRequest()
    {
        return $this->APIUpdateStockRequest;
    }

    /**
     * @param APIUpdateStockRequest[] $APIUpdateStockRequest
     * @return ArrayOfAPIUpdateStockRequest
     */
    public function setAPIUpdateStockRequest(array $APIUpdateStockRequest = null)
    {
        $this->APIUpdateStockRequest = $APIUpdateStockRequest;
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
        return isset($this->APIUpdateStockRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIUpdateStockRequest
     */
    public function offsetGet($offset)
    {
        return $this->APIUpdateStockRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIUpdateStockRequest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIUpdateStockRequest[] = $value;
        } else {
            $this->APIUpdateStockRequest[$offset] = $value;
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
        unset($this->APIUpdateStockRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIUpdateStockRequest Return the current element
     */
    public function current()
    {
        return current($this->APIUpdateStockRequest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIUpdateStockRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIUpdateStockRequest);
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
        reset($this->APIUpdateStockRequest);
    }

    /**
     * Countable implementation
     *
     * @return APIUpdateStockRequest Return count of elements
     */
    public function count()
    {
        return count($this->APIUpdateStockRequest);
    }
}
