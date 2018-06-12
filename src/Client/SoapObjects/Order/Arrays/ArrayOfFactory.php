<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfFactory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Factory[] $Factory
     */
    protected $Factory = null;


    public function __construct()
    {
    }

    /**
     * @return Factory[]
     */
    public function getFactory()
    {
        return $this->Factory;
    }

    /**
     * @param Factory[] $Factory
     * @return ArrayOfFactory
     */
    public function setFactory(array $Factory = null)
    {
        $this->Factory = $Factory;
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
        return isset($this->Factory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Factory
     */
    public function offsetGet($offset)
    {
        return $this->Factory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Factory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Factory[] = $value;
        } else {
            $this->Factory[$offset] = $value;
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
        unset($this->Factory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Factory Return the current element
     */
    public function current()
    {
        return current($this->Factory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Factory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Factory);
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
        reset($this->Factory);
    }

    /**
     * Countable implementation
     *
     * @return Factory Return count of elements
     */
    public function count()
    {
        return count($this->Factory);
    }
}
