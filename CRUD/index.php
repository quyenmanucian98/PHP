<?php

$dataFile = file_get_contents("data.json");
$array = json_decode($dataFile, true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="border-collapse: collapse; width: 100%;">
    <caption><h1>Danh Sách Học Sinh</h1></caption>
    <tr>
        <td>NAME</td>
        <td>ADDRESS</td>
        <td>PHONE</td>
        <td>ROLE</td>
        <td>CLASS</td>
    </tr>
    <?php
    for ($i = 0; $i < count($array); $i++) {
        echo "<tr>";
        echo "<td>" . $array[$i]['name'] . "</td>";
        echo "<td>" . $array[$i]['address'] . "</td>";
        echo "<td>" . $array[$i]['phone'] . "</td>";
        echo "<td>" . $array[$i]['role'] . "</td>";
        echo "<td>" . $array[$i]['class'] . "</td>";
        echo "<td>" . "<a href='Edit.php?id=" . $i . "'>EDIT" . "</td>";
        echo "<td>" . "<a href='Delete.php?id=" . $i . "'>DELETE" . "</td>";
        echo "</tr>";
    }
    ?>
    <a href="Add.php">ADD STUDENTS</a>
</body>
</html>
