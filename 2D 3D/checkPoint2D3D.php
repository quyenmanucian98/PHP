<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point3D = new Point3D(5,5,5);
$point3D->set_XYZ(1,1,2);
$point3D->ToString();
?>