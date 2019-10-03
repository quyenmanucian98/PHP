<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function get_X()
    {
        return $this->x;
    }

    public function set_X($x)
    {
        $this->x = $x;
    }

    public function get_Y()
    {
        return $this->y;
    }

    public function set_Y($y)
    {
        $this->y = $y;
    }

    public function set_XY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function get_XY()
    {
        return $arr = array($this->x, $this->y);
    }

    public function ToString()
    {
        echo 'This X is: ' . $this->x;
        echo "<br>";
        echo 'This Y is: ' . $this->y;
    }
}
?>
