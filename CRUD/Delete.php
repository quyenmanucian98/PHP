<?php
$index = $_GET['id'];
$arr = file_get_contents("data.json");
$arr1 = json_decode($arr, true);
array_splice($arr1, $index, 1);
//unset($arr[$index]);
$arr2 = json_encode($arr1);
file_put_contents("data.json", $arr2);
header("Location: index.php");