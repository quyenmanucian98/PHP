<?php
$str = "Lê Danh Quyền";
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    if ("n" == $str[$i]) {
        $count++;
    }
}
echo $count;
?>
