<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPISalesChannelLink class.
 */
class ArrayOfAPISalesChannelLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APISalesChannelLink[] $APISalesChannelLink
     */
    protected $APISalesChannelLink = null;


    public function __construct()
    {
    }

    /**
     * @return APISalesChannelLink[]
     */
    public function getAPISalesChannelLink()
    {
        return $this->APISalesChannelLink;
    }

    /**
     * @param APISalesChannelLink[] $APISalesChannelLink
     * @return ArrayOfAPISalesChannelLink
     */
    public function setAPISalesChannelLink(array $APISalesChannelLink = null)
    {
        $this->APISalesChannelLink = $APISalesChannelLink;
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
        return isset($this->APISalesChannelLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APISalesChannelLink
     */
    public function offsetGet($offset)
    {
        return $this->APISalesChannelLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APISalesChannelLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APISalesChannelLink[] = $value;
        } else {
            $this->APISalesChannelLink[$offset] = $value;
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
        unset($this->APISalesChannelLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APISalesChannelLink Return the current element
     */
    public function current()
    {
        return current($this->APISalesChannelLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APISalesChannelLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APISalesChannelLink);
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
        reset($this->APISalesChannelLink);
    }

    /**
     * Countable implementation
     *
     * @return APISalesChannelLink Return count of elements
     */
    public function count()
    {
        return count($this->APISalesChannelLink);
    }
}
