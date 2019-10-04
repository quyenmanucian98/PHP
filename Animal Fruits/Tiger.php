<?php
include_once "abstractClassAnimal.php";
include_once "interfaceEdible.php";

class Tiger extends Animal implements Edible
{
    public function makeSound()
    {
       echo "Tiger Sound: Grrrrrrrr";
    }
    public function howToEat()
    {
        echo "nướng nguyên con";
    }
}

?>