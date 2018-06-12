<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfProductFactoryLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductFactoryLink[] $ProductFactoryLink
     */
    protected $ProductFactoryLink = null;


    public function __construct()
    {
    }

    /**
     * @return ProductFactoryLink[]
     */
    public function getProductFactoryLink()
    {
        return $this->ProductFactoryLink;
    }

    /**
     * @param ProductFactoryLink[] $ProductFactoryLink
     * @return ArrayOfProductFactoryLink
     */
    public function setProductFactoryLink(array $ProductFactoryLink = null)
    {
        $this->ProductFactoryLink = $ProductFactoryLink;
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
        return isset($this->ProductFactoryLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductFactoryLink
     */
    public function offsetGet($offset)
    {
        return $this->ProductFactoryLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductFactoryLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ProductFactoryLink[] = $value;
        } else {
            $this->ProductFactoryLink[$offset] = $value;
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
        unset($this->ProductFactoryLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductFactoryLink Return the current element
     */
    public function current()
    {
        return current($this->ProductFactoryLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ProductFactoryLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ProductFactoryLink);
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
        reset($this->ProductFactoryLink);
    }

    /**
     * Countable implementation
     *
     * @return ProductFactoryLink Return count of elements
     */
    public function count()
    {
        return count($this->ProductFactoryLink);
    }
}
