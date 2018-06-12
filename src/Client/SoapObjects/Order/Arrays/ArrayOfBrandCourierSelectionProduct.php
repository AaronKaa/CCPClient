<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfBrandCourierSelectionProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrandCourierSelectionProduct[] $BrandCourierSelectionProduct
     */
    protected $BrandCourierSelectionProduct = null;


    public function __construct()
    {
    }

    /**
     * @return BrandCourierSelectionProduct[]
     */
    public function getBrandCourierSelectionProduct()
    {
        return $this->BrandCourierSelectionProduct;
    }

    /**
     * @param BrandCourierSelectionProduct[] $BrandCourierSelectionProduct
     * @return ArrayOfBrandCourierSelectionProduct
     */
    public function setBrandCourierSelectionProduct(array $BrandCourierSelectionProduct = null)
    {
        $this->BrandCourierSelectionProduct = $BrandCourierSelectionProduct;
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
        return isset($this->BrandCourierSelectionProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrandCourierSelectionProduct
     */
    public function offsetGet($offset)
    {
        return $this->BrandCourierSelectionProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrandCourierSelectionProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->BrandCourierSelectionProduct[] = $value;
        } else {
            $this->BrandCourierSelectionProduct[$offset] = $value;
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
        unset($this->BrandCourierSelectionProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrandCourierSelectionProduct Return the current element
     */
    public function current()
    {
        return current($this->BrandCourierSelectionProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->BrandCourierSelectionProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->BrandCourierSelectionProduct);
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
        reset($this->BrandCourierSelectionProduct);
    }

    /**
     * Countable implementation
     *
     * @return BrandCourierSelectionProduct Return count of elements
     */
    public function count()
    {
        return count($this->BrandCourierSelectionProduct);
    }
}
