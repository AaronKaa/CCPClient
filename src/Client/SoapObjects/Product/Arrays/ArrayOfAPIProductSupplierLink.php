<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPIProductSupplierLink class.
 */
class ArrayOfAPIProductSupplierLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductSupplierLink[] $APIProductSupplierLink
     */
    protected $APIProductSupplierLink = null;


    public function __construct()
    {
    }

    /**
     * @return APIProductSupplierLink[]
     */
    public function getAPIProductSupplierLink()
    {
        return $this->APIProductSupplierLink;
    }

    /**
     * @param APIProductSupplierLink[] $APIProductSupplierLink
     * @return ArrayOfAPIProductSupplierLink
     */
    public function setAPIProductSupplierLink(array $APIProductSupplierLink = null)
    {
        $this->APIProductSupplierLink = $APIProductSupplierLink;
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
        return isset($this->APIProductSupplierLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductSupplierLink
     */
    public function offsetGet($offset)
    {
        return $this->APIProductSupplierLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductSupplierLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProductSupplierLink[] = $value;
        } else {
            $this->APIProductSupplierLink[$offset] = $value;
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
        unset($this->APIProductSupplierLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductSupplierLink Return the current element
     */
    public function current()
    {
        return current($this->APIProductSupplierLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProductSupplierLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProductSupplierLink);
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
        reset($this->APIProductSupplierLink);
    }

    /**
     * Countable implementation
     *
     * @return APIProductSupplierLink Return count of elements
     */
    public function count()
    {
        return count($this->APIProductSupplierLink);
    }
}
