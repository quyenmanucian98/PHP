<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arrayList)
    {
        $this->arrayList = $arrayList;
    }

    public function ArrayList($arr ="")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function add($object)
    {
        array_push($this->arrayList, $object);
    }

    public function get($index)
    {
        if ($this->isInterger($index) == true && $index < count($this->arrayList)) {
            return $this->arrayList[$index];
        } else {
            echo "Error in ArrayList";
        }
    }

    public function isInterger($numberToCheck)
    {
       return preg_match("/^[0-9]+$/", $numberToCheck);
    }
}



?>
