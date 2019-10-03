<?php

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function get_Radius()
    {
        return $this->radius;
    }

    public function set_Radius($radius)
    {
        $this->radius = $radius;
    }

    public function get_Color()
    {
        return $this->color;
    }

    public function set_Color($color)
    {
        $this->color = $color;
    }

    public function get_Area()
    {
        return $this->radius * $this->radius * pi();
    }
    public function get_Primeter()
    {
        return $this->radius*pi()*2;
    }
    public function ToString()
    {
        echo "Radius is: ".$this->radius;
        echo "<br>";
        echo "Color is: ".$this->color;
        echo "<br>";
        echo "Area is: ".$this->get_Area();
    }
}

?>