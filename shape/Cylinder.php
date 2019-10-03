<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function get_Volume()
    {
        return pi() * $this->radius * $this->radius * $this->height;
    }

    public function get_Area()
    {
        return 2 * pi() * $this->radius * $this->height;
    }
}

?>