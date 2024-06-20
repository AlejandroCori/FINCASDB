<?php
include("../conexion.php");
$cu=$_POST['txtcu'];
//echo $ced
$r="delete from LocalComercial where codLocalComercial  ='".$cu."'";
$r=mysqli_query($link, $r);
header("Location: ../T_LocalComercial.php ");
?>