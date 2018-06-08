<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

class ArrayOfAPIProductImage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductImage[] $APIProductImage
     */
    protected $APIProductImage = null;


    public function __construct()
    {
    }

    /**
     * @return APIProductImage[]
     */
    public function getAPIProductImage()
    {
        return $this->APIProductImage;
    }

    /**
     * @param APIProductImage[] $APIProductImage
     * @return ArrayOfAPIProductImage
     */
    public function setAPIProductImage(array $APIProductImage = null)
    {
        $this->APIProductImage = $APIProductImage;
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
        return isset($this->APIProductImage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductImage
     */
    public function offsetGet($offset)
    {
        return $this->APIProductImage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductImage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProductImage[] = $value;
        } else {
            $this->APIProductImage[$offset] = $value;
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
        unset($this->APIProductImage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductImage Return the current element
     */
    public function current()
    {
        return current($this->APIProductImage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProductImage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProductImage);
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
        reset($this->APIProductImage);
    }

    /**
     * Countable implementation
     *
     * @return APIProductImage Return count of elements
     */
    public function count()
    {
        return count($this->APIProductImage);
    }
}
