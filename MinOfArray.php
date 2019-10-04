<form action="" method="post">
    <input type="text" name="number">
    <button type="submit">Check</button>

</form>
<?php
$numbers = $_POST['number'];
$newNumber = explode(",", $numbers);
$min = $newNumber[0];
for ($i = 0; $i < count($newNumber); $i++) {
    if ($min > $newNumber[$i]) {
        $min = $newNumber[$i];
    }
}
echo $min;
?>

