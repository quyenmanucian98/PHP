<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Máy Tính Đơn Giản</title>
</head>
<body>
<form action="" method="post">
    First operand: <input type="text" name="input1"><br>
    Second operand:<input type="text" name="input2"><br>
    Operator: <input type="submit" value="+" name="tinhtoan">
    <input type="submit" value="-" name="tinhtoan">
    <input type="submit" value="*" name="tinhtoan">
    <input type="submit" value="/" name="tinhtoan"><br>

    <!--    <button type="submit">Caculate</button>-->
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['input1'];
    $number2 = $_POST['input2'];
//    var_dump($number2);
//    die();
    switch ($_POST["tinhtoan"]) {
        case "+":
            $ketqua = $number1 + $number2;
            break;
        case "-":
            $ketqua = $number1 - $number2;
            break;
        case "*":
            $ketqua = $number1 * $number2;
            break;
        case "/":
            if ($number2 != 0) {
                $ketqua = $number1 / $number2;
            }else{
                echo "loi loi mat";
            }
            break;


    }
    echo $ketqua;
}
?>
</body>
</html>
