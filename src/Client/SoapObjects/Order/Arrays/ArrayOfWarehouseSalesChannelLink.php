<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfWarehouseSalesChannelLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WarehouseSalesChannelLink[] $WarehouseSalesChannelLink
     */
    protected $WarehouseSalesChannelLink = null;


    public function __construct()
    {
    }

    /**
     * @return WarehouseSalesChannelLink[]
     */
    public function getWarehouseSalesChannelLink()
    {
        return $this->WarehouseSalesChannelLink;
    }

    /**
     * @param WarehouseSalesChannelLink[] $WarehouseSalesChannelLink
     * @return ArrayOfWarehouseSalesChannelLink
     */
    public function setWarehouseSalesChannelLink(array $WarehouseSalesChannelLink = null)
    {
        $this->WarehouseSalesChannelLink = $WarehouseSalesChannelLink;
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
        return isset($this->WarehouseSalesChannelLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WarehouseSalesChannelLink
     */
    public function offsetGet($offset)
    {
        return $this->WarehouseSalesChannelLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WarehouseSalesChannelLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->WarehouseSalesChannelLink[] = $value;
        } else {
            $this->WarehouseSalesChannelLink[$offset] = $value;
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
        unset($this->WarehouseSalesChannelLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WarehouseSalesChannelLink Return the current element
     */
    public function current()
    {
        return current($this->WarehouseSalesChannelLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->WarehouseSalesChannelLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->WarehouseSalesChannelLink);
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
        reset($this->WarehouseSalesChannelLink);
    }

    /**
     * Countable implementation
     *
     * @return WarehouseSalesChannelLink Return count of elements
     */
    public function count()
    {
        return count($this->WarehouseSalesChannelLink);
    }
}
