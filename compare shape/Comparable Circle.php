<?php
include_once "InterComparable.php";
$cicrleOne = new alpha("Cicrle One", 10);
$cicrleTwo = new alpha("Cicrle One", 20);
var_dump($cicrleOne->Sort($cicrleOne, $cicrleTwo));

?>
