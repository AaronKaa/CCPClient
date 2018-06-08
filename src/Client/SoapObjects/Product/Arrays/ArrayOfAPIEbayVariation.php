<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

class ArrayOfAPIEbayVariation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIEbayVariation[] $APIEbayVariation
     */
    protected $APIEbayVariation = null;


    public function __construct()
    {
    }

    /**
     * @return APIEbayVariation[]
     */
    public function getAPIEbayVariation()
    {
        return $this->APIEbayVariation;
    }

    /**
     * @param APIEbayVariation[] $APIEbayVariation
     * @return ArrayOfAPIEbayVariation
     */
    public function setAPIEbayVariation(array $APIEbayVariation = null)
    {
        $this->APIEbayVariation = $APIEbayVariation;
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
        return isset($this->APIEbayVariation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIEbayVariation
     */
    public function offsetGet($offset)
    {
        return $this->APIEbayVariation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIEbayVariation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIEbayVariation[] = $value;
        } else {
            $this->APIEbayVariation[$offset] = $value;
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
        unset($this->APIEbayVariation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIEbayVariation Return the current element
     */
    public function current()
    {
        return current($this->APIEbayVariation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIEbayVariation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIEbayVariation);
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
        reset($this->APIEbayVariation);
    }

    /**
     * Countable implementation
     *
     * @return APIEbayVariation Return count of elements
     */
    public function count()
    {
        return count($this->APIEbayVariation);
    }
}
