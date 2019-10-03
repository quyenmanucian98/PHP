<?php
include_once "ShapeAll.php";

class Rectangle extends Shape
{
    public $height;
    public $width;

   public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function get_Area()
    {
        return $this->height * $this->width;
    }

    public function get_Perimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}

?>