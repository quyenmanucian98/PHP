<?php
include_once "abstractFruits.php";
include_once "interfaceEdible.php";
class Apple extends Fruits implements Edible{
    public function name()
    {
       return "Apple"; // TODO: Implement name() method.
    }
    public function howToEat()
    {
     echo "Táp từng miếng một";  // TODO: Implement howToEat() method.
    }
}
?>