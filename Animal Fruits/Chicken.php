<?php
include_once "abstractClassAnimal.php";
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
        echo "Chicken Sound: cục ta cục tác";
    }
    public function howToEat()
    {
       echo "quay cho nó mát";
    }
}
?>