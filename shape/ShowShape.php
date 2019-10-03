<?php
include_once "ShapeAll.php";
include_once "Square.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
$circle = new Circle("Hình Tròn", 4);
$circle->show();
echo "<br>";
echo "Area is: ".$circle->get_Area();
?>
