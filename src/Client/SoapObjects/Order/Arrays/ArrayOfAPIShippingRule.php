<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfAPIShippingRule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIShippingRule[] $APIShippingRule
     */
    protected $APIShippingRule = null;


    public function __construct()
    {
    }

    /**
     * @return APIShippingRule[]
     */
    public function getAPIShippingRule()
    {
        return $this->APIShippingRule;
    }

    /**
     * @param APIShippingRule[] $APIShippingRule
     * @return ArrayOfAPIShippingRule
     */
    public function setAPIShippingRule(array $APIShippingRule = null)
    {
        $this->APIShippingRule = $APIShippingRule;
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
        return isset($this->APIShippingRule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIShippingRule
     */
    public function offsetGet($offset)
    {
        return $this->APIShippingRule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIShippingRule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->APIShippingRule[] = $value;
        } else {
            $this->APIShippingRule[$offset] = $value;
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
        unset($this->APIShippingRule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIShippingRule Return the current element
     */
    public function current()
    {
        return current($this->APIShippingRule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->APIShippingRule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->APIShippingRule);
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
        reset($this->APIShippingRule);
    }

    /**
     * Countable implementation
     *
     * @return APIShippingRule Return count of elements
     */
    public function count()
    {
        return count($this->APIShippingRule);
    }
}
