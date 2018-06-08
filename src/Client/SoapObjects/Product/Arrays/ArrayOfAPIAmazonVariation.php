<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

class ArrayOfAPIAmazonVariation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIAmazonVariation[] $APIAmazonVariation
     */
    protected $APIAmazonVariation = null;


    public function __construct()
    {
    }

    /**
     * @return APIAmazonVariation[]
     */
    public function getAPIAmazonVariation()
    {
        return $this->APIAmazonVariation;
    }

    /**
     * @param APIAmazonVariation[] $APIAmazonVariation
     * @return ArrayOfAPIAmazonVariation
     */
    public function setAPIAmazonVariation(array $APIAmazonVariation = null)
    {
        $this->APIAmazonVariation = $APIAmazonVariation;
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
        return isset($this->APIAmazonVariation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIAmazonVariation
     */
    public function offsetGet($offset)
    {
        return $this->APIAmazonVariation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIAmazonVariation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIAmazonVariation[] = $value;
        } else {
            $this->APIAmazonVariation[$offset] = $value;
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
        unset($this->APIAmazonVariation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIAmazonVariation Return the current element
     */
    public function current()
    {
        return current($this->APIAmazonVariation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIAmazonVariation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIAmazonVariation);
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
        reset($this->APIAmazonVariation);
    }

    /**
     * Countable implementation
     *
     * @return APIAmazonVariation Return count of elements
     */
    public function count()
    {
        return count($this->APIAmazonVariation);
    }
}
