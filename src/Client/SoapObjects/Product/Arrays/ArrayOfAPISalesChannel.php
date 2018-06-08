<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfAPISalesChannel class.
 */
class ArrayOfAPISalesChannel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APISalesChannel[] $APISalesChannel
     */
    protected $APISalesChannel = null;


    public function __construct()
    {
    }

    /**
     * @return APISalesChannel[]
     */
    public function getAPISalesChannel()
    {
        return $this->APISalesChannel;
    }

    /**
     * @param APISalesChannel[] $APISalesChannel
     * @return ArrayOfAPISalesChannel
     */
    public function setAPISalesChannel(array $APISalesChannel = null)
    {
        $this->APISalesChannel = $APISalesChannel;
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
        return isset($this->APISalesChannel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APISalesChannel
     */
    public function offsetGet($offset)
    {
        return $this->APISalesChannel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APISalesChannel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APISalesChannel[] = $value;
        } else {
            $this->APISalesChannel[$offset] = $value;
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
        unset($this->APISalesChannel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APISalesChannel Return the current element
     */
    public function current()
    {
        return current($this->APISalesChannel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APISalesChannel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APISalesChannel);
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
        reset($this->APISalesChannel);
    }

    /**
     * Countable implementation
     *
     * @return APISalesChannel Return count of elements
     */
    public function count()
    {
        return count($this->APISalesChannel);
    }
}
