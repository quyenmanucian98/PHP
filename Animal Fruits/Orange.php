<?php
include_once "abstractFruits.php";
include_once "interfaceEdible.php";
class Orange extends Fruits implements Edible{
    public function name()
    {
     return "Orange";   // TODO: Implement name() method.
    }
    public function howToEat()
    {
     echo "vắt ra uống cho khả quan";  // TODO: Implement howToEat() method.
    }
}
?>