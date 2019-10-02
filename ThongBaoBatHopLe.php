<form action="" method="post">
    <input type="text" name="input1" placeholder="Number 1"><br>
    <input type="text" name="input2" placeholder="Number 2"><br>
    <input type="submit" value="+" name="tinhtoan">
    <input type="submit" value="-" name="tinhtoan">
    <input type="submit" value="*" name="tinhtoan">
    <input type="submit" value="/" name="tinhtoan">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['input1'];
    $number2 = $_POST['input2'];
    $operator = $_POST['tinhtoan'];
    try {
        if ($number2 == 0) {
            throw new Exception("Xảy ra ngoại lệ");
        } else {
            switch ($operator) {
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
                    $ketqua = $number1 / $number2;
                    break;
            }
            echo $ketqua;
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage(), "\n";
    }
}

