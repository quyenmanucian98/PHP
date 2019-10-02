<?php

class Rectangle
{
    public $width;
    public $height;
    public $area;
    public $perimeter;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    function get_Width()
    {
        return $this->width;
    }

    function set_Width($set_width)
    {
        $this->width = $set_width;
    }

    function get_Height()
    {
        return $this->height;
    }

    function set_Height($set_height)
    {
        $this->height = $set_height;
    }

    function get_Area()
    {
        return $this->height * $this->width;
    }

    function get_Perimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    function display()
    {
        echo "Area is: " . $this->get_Area() . "<br>" . "Premeter is: " . $this->get_Perimeter();
    }
}

$height = 100;
$width = 200;
$rectangle = new Rectangle($height, $width);
$rectangle->display();
?>