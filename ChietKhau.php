<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính chiết khấu</title>
</head>
<body>
<form action="" method="post">
    <caption><h1>Product Discount Calculator</h1></caption>
    Product Description: <input type="text" name="description"><br>
    List Price :         <input type="text" name="price"><br>
    Discount Percent :   <input type="text" name="discount"><br>
    <button type="submit">Caculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $product = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
}
$caculate = $price*$discount*0.1;
echo "Discount Amount: ". $caculate;
?>
</body>
</html>
