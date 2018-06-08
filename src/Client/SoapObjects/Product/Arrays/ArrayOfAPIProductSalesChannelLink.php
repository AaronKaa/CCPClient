<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPIProductSalesChannelLink class.
 */
class ArrayOfAPIProductSalesChannelLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductSalesChannelLink[] $APIProductSalesChannelLink
     */
    protected $APIProductSalesChannelLink = null;


    public function __construct()
    {
    }

    /**
     * @return APIProductSalesChannelLink[]
     */
    public function getAPIProductSalesChannelLink()
    {
        return $this->APIProductSalesChannelLink;
    }

    /**
     * @param APIProductSalesChannelLink[] $APIProductSalesChannelLink
     * @return ArrayOfAPIProductSalesChannelLink
     */
    public function setAPIProductSalesChannelLink(array $APIProductSalesChannelLink = null)
    {
        $this->APIProductSalesChannelLink = $APIProductSalesChannelLink;
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
        return isset($this->APIProductSalesChannelLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductSalesChannelLink
     */
    public function offsetGet($offset)
    {
        return $this->APIProductSalesChannelLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductSalesChannelLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIProductSalesChannelLink[] = $value;
        } else {
            $this->APIProductSalesChannelLink[$offset] = $value;
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
        unset($this->APIProductSalesChannelLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductSalesChannelLink Return the current element
     */
    public function current()
    {
        return current($this->APIProductSalesChannelLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIProductSalesChannelLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIProductSalesChannelLink);
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
        reset($this->APIProductSalesChannelLink);
    }

    /**
     * Countable implementation
     *
     * @return APIProductSalesChannelLink Return count of elements
     */
    public function count()
    {
        return count($this->APIProductSalesChannelLink);
    }
}
