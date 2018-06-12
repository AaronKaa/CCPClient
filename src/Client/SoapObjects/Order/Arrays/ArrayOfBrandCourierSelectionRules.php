<?php
namespace AKaa\CCPApi\Client\SoapObjects\Order\Arrays;

class ArrayOfBrandCourierSelectionRules implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrandCourierSelectionRules[] $BrandCourierSelectionRules
     */
    protected $BrandCourierSelectionRules = null;


    public function __construct()
    {
    }

    /**
     * @return BrandCourierSelectionRules[]
     */
    public function getBrandCourierSelectionRules()
    {
        return $this->BrandCourierSelectionRules;
    }

    /**
     * @param BrandCourierSelectionRules[] $BrandCourierSelectionRules
     * @return ArrayOfBrandCourierSelectionRules
     */
    public function setBrandCourierSelectionRules(array $BrandCourierSelectionRules = null)
    {
        $this->BrandCourierSelectionRules = $BrandCourierSelectionRules;
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
        return isset($this->BrandCourierSelectionRules[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrandCourierSelectionRules
     */
    public function offsetGet($offset)
    {
        return $this->BrandCourierSelectionRules[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrandCourierSelectionRules $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->BrandCourierSelectionRules[] = $value;
        } else {
            $this->BrandCourierSelectionRules[$offset] = $value;
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
        unset($this->BrandCourierSelectionRules[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrandCourierSelectionRules Return the current element
     */
    public function current()
    {
        return current($this->BrandCourierSelectionRules);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->BrandCourierSelectionRules);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->BrandCourierSelectionRules);
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
        reset($this->BrandCourierSelectionRules);
    }

    /**
     * Countable implementation
     *
     * @return BrandCourierSelectionRules Return count of elements
     */
    public function count()
    {
        return count($this->BrandCourierSelectionRules);
    }
}
