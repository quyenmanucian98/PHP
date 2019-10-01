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
<form action="" method="post">
    <caption>Login</caption>
    <br>
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="passwold"><br>
    <button type="submit">Sigh In</button>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputname = $_POST['username'];
        $inputpassword = $_POST['password'];

        if ($inputname == "admin" && $inputpassword == "admin") {
            echo "<h1>Well Come<span style='color:red>" . $inputname . "<span> to wepside<h1>";
        } else {
            echo "login error";
        }
    }
    ?>
</form>
</body>
</html>
