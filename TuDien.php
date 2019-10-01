<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            width: 200px;
            font-size: 16px;
            border: 2px solid red;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        button {
            width: 100px;
            height: 50px;
            border: 5px solid pink;

        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form action="" method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm">
    <button type="submit">Check</button>
</form>
<?php
$english = array("hello" => "xin chào", "how" => "thế nào", "book" => "quyển vở", "computer" => "máy tính");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seach = $_POST["search"];
    $check = false;
    foreach ($english as $key => $value) {
        if ($seach == $key) {
            echo "Từ:" . $key . "<br>" . "Nghĩa của từ: " . $value;
            $check = true;
        }
    }
    if ($seach != $key){
        return $check;
        echo "không tìm thấy";
    }
}
?>
</body>
</html>