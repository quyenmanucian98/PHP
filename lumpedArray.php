<form action="" method="post">
    <input type="text" name="number1" placeholder="enter number">
    <input type="text" name="number2" placeholder="enter number">
    <button type="submit">LUMPED</button>

</form>
<?php
$arrOne = $_POST['number1'];
$arrTwo = $_POST['number2'];
$newArrOne = explode(',', $arrOne);
$newArrTwo = explode(",", $arrTwo);
$arrThree = array_merge($newArrOne,$newArrTwo);
print_r($arrThree);

    ?>