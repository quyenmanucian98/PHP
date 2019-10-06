<?php
include_once "ClassList.php";
$listArrayOne = new ArrayList(array());
$listArrayOne->add(1);
$listArrayOne->add(10);
$listArrayOne->add(17);
$listArrayOne->add("Quyền");
echo $listArrayOne->get(3);