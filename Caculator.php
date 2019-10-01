<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furture Value Caculator</title>
</head>
<body>
<form action="" method="post">
    Inventment Amount: <input type="text" name="amount"><br>
    Yearly interest Rate: <input type="text" name="rate"><br>
    Number of Years: <input type="text" name="years"><br>
    <button type="submit">Caculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $years = $_POST['years'];
    $futureValue = $amount + ($amount*$rate);
    echo  $futureValue;
}
?>
</body>
</html>
