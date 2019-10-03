<?php
include_once "ShapeAll.php";
class Square extends Shape
{
    public $height;

    public function __construct($name, $height)
    {
        parent::__construct($name);
        $this->height = $height;
    }

   public function get_Area()
    {
        return $this->height * 2;
    }

    public function get_Perimeter()
    {
        return $this->height * 4;
    }
}

?>

