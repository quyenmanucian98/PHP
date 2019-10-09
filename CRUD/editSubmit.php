<?php
include_once 'ManagerStudents.php';
$id = $_POST['id'];
$dataFile = file_get_contents("data.json");
$arrayList = json_decode($dataFile, true);
    $arrayList[$id]['name'] = $_POST['name'];
    $arrayList[$id]['address'] = $_POST['address'];
    $arrayList[$id]['phone'] = $_POST['phone'];
    $arrayList[$id]['role'] = $_POST['role'];
    $arrayList[$id]['class'] = $_POST['class'];

$arrayList=json_encode($arrayList);
file_put_contents("data.json",$arrayList);
   header("Location: index.php");
