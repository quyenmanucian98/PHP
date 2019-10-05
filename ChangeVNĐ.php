<form action="" method="post">
    <input type="text" name="usd" placeholder="Mệnh giá USD">
    <button type="submit">Change To VND</button><?php change() ?>
</form>
<?php
function change()
{
    $number = $_POST['usd'];
    $change = $number * 23000;
    echo $change."VND";
}

?>
