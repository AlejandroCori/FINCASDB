<?php
include("../conexion.php");
$idc=$_POST['txtidc'];
//echo $ced
$r="delete from Cuenta where idCuenta ='".$idc."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Cuenta.php");
?>