<?php
include_once "ClassTriangle.php";

class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;

    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function get_Area()
    {
        return $this->side1 * $this->side1 * (sqrt(3) / 4);
    }

    public function get_Perimeter()
    {
        return $this->side1 * 3;
    }
}
$triangle = new Triangle("Triangle",1,1,1);
echo $triangle->get_Area();
echo "<br>";
echo $triangle->get_Perimeter();
