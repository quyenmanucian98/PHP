<?php
include_once "abstractClassAnimal.php";
include_once "abstractFruits.php";
include_once "interfaceEdible.php";
include_once "Apple.php";
include_once "Orange.php";
include_once "Chicken.php";
include_once "Tiger.php";
$apple = new Apple();
$orange = new Orange();
$chicken = new Chicken();
$tiger = new Tiger();
$arr[0] = $apple->howToEat();
$arr[1] = $orange->howToEat();
array_push($arr, $tiger->howToEat());
foreach ($arr as $value) {
    echo "$value" . "<br>";
}
?>