<?php

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "Hello!! My name is $this->name";
    }
}
?>