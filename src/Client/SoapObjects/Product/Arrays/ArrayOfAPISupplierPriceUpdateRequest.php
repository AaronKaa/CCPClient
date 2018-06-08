<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPISupplierPriceUpdateRequest class.
 */
class ArrayOfAPISupplierPriceUpdateRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APISupplierPriceUpdateRequest[] $APISupplierPriceUpdateRequest
     */
    protected $APISupplierPriceUpdateRequest = null;


    public function __construct()
    {
    }

    /**
     * @return APISupplierPriceUpdateRequest[]
     */
    public function getAPISupplierPriceUpdateRequest()
    {
        return $this->APISupplierPriceUpdateRequest;
    }

    /**
     * @param APISupplierPriceUpdateRequest[] $APISupplierPriceUpdateRequest
     * @return ArrayOfAPISupplierPriceUpdateRequest
     */
    public function setAPISupplierPriceUpdateRequest(array $APISupplierPriceUpdateRequest = null)
    {
        $this->APISupplierPriceUpdateRequest = $APISupplierPriceUpdateRequest;
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
        return isset($this->APISupplierPriceUpdateRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APISupplierPriceUpdateRequest
     */
    public function offsetGet($offset)
    {
        return $this->APISupplierPriceUpdateRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APISupplierPriceUpdateRequest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APISupplierPriceUpdateRequest[] = $value;
        } else {
            $this->APISupplierPriceUpdateRequest[$offset] = $value;
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
        unset($this->APISupplierPriceUpdateRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APISupplierPriceUpdateRequest Return the current element
     */
    public function current()
    {
        return current($this->APISupplierPriceUpdateRequest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APISupplierPriceUpdateRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APISupplierPriceUpdateRequest);
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
        reset($this->APISupplierPriceUpdateRequest);
    }

    /**
     * Countable implementation
     *
     * @return APISupplierPriceUpdateRequest Return count of elements
     */
    public function count()
    {
        return count($this->APISupplierPriceUpdateRequest);
    }
}
