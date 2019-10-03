<?php
include_once "ShapeAll.php";

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function get_Area()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function get_Perimeter()
    {
        return 2 * pi() * $this->radius;
    }
}

?>