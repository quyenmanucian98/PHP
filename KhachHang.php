<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển Thị Danh Sách Khách Hàng</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid red;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h1>Danh Sách Khách Hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $lishCustomer = array(
        "1" => array("ten" => "Ronaldo",
            "ngaysinh" => "5-2-1985",
            "diachi" => "Portugal",
            "anh" => "1.jpg"),
        "2" => array("ten" => "Messi",
            "ngaysinh" => "5-2-1985",
            "diachi" => "Portugal",
            "anh" => "2.jpg"),
        "3" => array("ten" => "Rooney",
            "ngaysinh" => "24-10-1985",
            "diachi" => "England",
            "anh" => "3.jpg"),
        "4" => array("ten" => "Tevez",
            "ngaysinh" => "5-2-1985",
            "diachi" => "Argentina",
            "anh" => "4.jpg"),
        "5" => array("ten" => "Pogba",
            "ngaysinh" => "5-2-1995",
            "diachi" => "France",
            "anh" => "5.jpg")

    );
    foreach ($lishCustomer as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value['ten'] . "</td>";
        echo "<td>" . $value['ngaysinh'] . "</td>";
        echo "<td>" . $value['diachi'] . "</td>";
        echo "<td><image src ='" . $value['anh'] . "' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
