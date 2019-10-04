<?php
include_once "Circle.php";
include_once "Compare.php";

class alpha extends Circle implements Compare
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function Sort($cicrle1, $cicrle2)
    {
        $circleRadius1 = $cicrle1->get_Radius();
        $circleRadius2 = $cicrle2->get_Radius();
        if ($circleRadius1 > $circleRadius2) {
//            echo "$cicrle1"." Lớn hơn "."$cicrle2";
            return 1;
        } elseif ($circleRadius1 < $circleRadius2) {
//            echo "$cicrle1"." Nhỏ hơn "."$cicrle2";
            return -1;
        } else {
//            echo "$cicrle1"." Bằng "."$cicrle2";
            return 0;
        }
    }
}

?>