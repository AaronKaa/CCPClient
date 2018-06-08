<?php
namespace AKaa\CCPApi\Client\SoapObjects\Product\Arrays;

/**
 * ArrayOfPackageProductWithQuantity class.
 */
class ArrayOfPackageProductWithQuantity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageProductWithQuantity[] $PackageProductWithQuantity
     */
    protected $PackageProductWithQuantity = null;


    public function __construct()
    {
    }

    /**
     * @return PackageProductWithQuantity[]
     */
    public function getPackageProductWithQuantity()
    {
        return $this->PackageProductWithQuantity;
    }

    /**
     * @param PackageProductWithQuantity[] $PackageProductWithQuantity
     * @return ArrayOfPackageProductWithQuantity
     */
    public function setPackageProductWithQuantity(array $PackageProductWithQuantity = null)
    {
        $this->PackageProductWithQuantity = $PackageProductWithQuantity;
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
        return isset($this->PackageProductWithQuantity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageProductWithQuantity
     */
    public function offsetGet($offset)
    {
        return $this->PackageProductWithQuantity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageProductWithQuantity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->PackageProductWithQuantity[] = $value;
        } else {
            $this->PackageProductWithQuantity[$offset] = $value;
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
        unset($this->PackageProductWithQuantity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageProductWithQuantity Return the current element
     */
    public function current()
    {
        return current($this->PackageProductWithQuantity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->PackageProductWithQuantity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->PackageProductWithQuantity);
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
        reset($this->PackageProductWithQuantity);
    }

    /**
     * Countable implementation
     *
     * @return PackageProductWithQuantity Return count of elements
     */
    public function count()
    {
        return count($this->PackageProductWithQuantity);
    }
}
