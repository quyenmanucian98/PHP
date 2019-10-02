<?php
$arr = array(array(1, 10, 3), array(3, 4, 5), array(6, 7, 8));
$lenght = count($arr);
$max = $arr[0][0];
for ($i = 0; $i < $lenght; $i++) {
    for ($j = 0; $j < count($arr[$i]);$j++){
        if ($max < $arr[$i][$j]){
            $max = $arr[$i][$j];
        }
    }
}
echo $max;
?>