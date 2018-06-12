<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfProductBarcode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductBarcode[] $ProductBarcode
     */
    protected $ProductBarcode = null;


    public function __construct()
    {
    }

    /**
     * @return ProductBarcode[]
     */
    public function getProductBarcode()
    {
        return $this->ProductBarcode;
    }

    /**
     * @param ProductBarcode[] $ProductBarcode
     * @return ArrayOfProductBarcode
     */
    public function setProductBarcode(array $ProductBarcode = null)
    {
        $this->ProductBarcode = $ProductBarcode;
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
        return isset($this->ProductBarcode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductBarcode
     */
    public function offsetGet($offset)
    {
        return $this->ProductBarcode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductBarcode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ProductBarcode[] = $value;
        } else {
            $this->ProductBarcode[$offset] = $value;
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
        unset($this->ProductBarcode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductBarcode Return the current element
     */
    public function current()
    {
        return current($this->ProductBarcode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ProductBarcode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ProductBarcode);
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
        reset($this->ProductBarcode);
    }

    /**
     * Countable implementation
     *
     * @return ProductBarcode Return count of elements
     */
    public function count()
    {
        return count($this->ProductBarcode);
    }
}
