<form action="" method="post">
    Name User:<input type="text" name="nameuser">
    Email User:<input type="text" name="emailuser">
    Telephone:<input type="text" name="telephone">
    <button type="submit">Login</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameUser = $_POST['nameuser'];
    $emailUser = $_POST['emailuser'];
    $telephone = $_POST['telephone'];
}
if (empty($nameUser)) {
    echo "You have not entered your name";
} else if (empty($emailUser)) {
    echo "You haver not entered your email";
} else if (empty($telephone)) {
    echo "You have not entered your telephon numbers";
} else {
    return true;
}

if (filter_var($emailUser, FILTER_VALIDATE_EMAIL)){
    return true;
}else{
    echo "<br>";
    echo "Email you entered illegal";
}

?>