<?php
$myArray = array(10, 9, 8, 1, 7, 5, 6);

class minNumber
{
    function min($array)
    {
        $lenght = count($array);
        $min = $array[0];
        for ($i = 1; $i < $lenght; $i++) {
            if ($min > $array[$i]) {
                $min = $array[$i];
            }
        }
        echo "$min";
    }
}

$checkMinNumber = new minNumber();
$checkMinNumber->min($myArray);
?>
