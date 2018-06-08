<?php

namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

class ArrayOfAPIProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProduct[] $APIProduct
     */
    protected $APIProduct = null;


    public function __construct()
    {
    }

    /**
     * @return APIProduct[]
     */
    public function getAPIProduct()
    {
        return $this->APIProduct;
    }

    /**
     * @param APIProduct[] $APIProduct
     * @return ArrayOfAPIProduct
     */
    public function setAPIProduct(array $APIProduct = null)
    {
        $this->APIProduct = $APIProduct;
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
        return isset($this->APIProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProduct
     */
    public function offsetGet($offset)
    {
        return $this->APIProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProduct[] = $value;
        } else {
            $this->APIProduct[$offset] = $value;
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
        unset($this->APIProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProduct Return the current element
     */
    public function current()
    {
        return current($this->APIProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProduct);
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
        reset($this->APIProduct);
    }

    /**
     * Countable implementation
     *
     * @return APIProduct Return count of elements
     */
    public function count()
    {
        return count($this->APIProduct);
    }
}
