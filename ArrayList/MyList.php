<?php


class MyList
{
    private $size;
    static $default_capacity;
    private $objectElement;

    public function __construct($objectElement)
    {
        $this->size = 0;
        $this->objectElement = $objectElement;
        MyList::$default_capacity = 10;
    }

    public function ArrayList($array)
    {
        if (is_array($array) == true) {
            $this->objectElement = $array;
        } else {
            $this->objectElement = [];
        }
    }

    public function addindex($value, $index)
    {
        array_pad($this->objectElement, $index, $value);
    }

    public function addLast($value)
    {
        array_push($this->objectElement, $value);
    }

    public function removeIndex($index)
    {
        $lenghtArray = count($this->objectElement);
        for ($i = 0; $i < $lenghtArray; $i++) {
            if ($index == $this->objectElement[$i]) {
                array_splice($this->objectElement, $i);
            }
        }
        return $this->objectElement;
    }

    public function size()
    {
        return count($this->objectElement);
    }

    public function booleanContains($value)
    {
        for ($i = 0; $i < count($this->objectElement); $i++) {
            if ($value == $this->objectElement[$i]) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function indexOf($value)
    {
        for ($i = 0; $i < count($this->objectElement); $i++) {
            if ($value == $this->objectElement[$i]) {
                return $i;
            } else {
                return -1;
            }
        }
    }

    public function get($index)
    {
        for ($i = 0; $i < $this->objectElement; $i++) {
            if ($index == $i) {
                return $this->objectElement[$i];
            } else {
                return "Error";
            }
        }
    }

    public function clear()
    {
        unset($this->objectElement);
    }

}