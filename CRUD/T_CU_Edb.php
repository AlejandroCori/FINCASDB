<?php
include("../conexion.php");
$nco=$_POST['txtidc'];
//echo $ced
$r="delete from Cuenta where idCuenta  ='".$nco."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Cuenta.php");
?>