<?php

function delete()
{
    $value = [10, 4, 6, 7, 8, 6, 0, 0, 0, 0];
    $number = $_POST['input'];
    for ($i = 0; $i < count($value); $i++) {
        if ($number == $value[$i]) {
            array_splice($value, $i, 1);
        }
    }
    print_r($value);
}

?>
<form action="" method="post">
    <input type="text" name="input">
    <button type="submit">DELETE</button>
    <?php delete(); ?>
</form>
