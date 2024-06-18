<?php
include("../conexion.php");
$idc=$_POST['txtidc'];
$dc=$_POST['txtdc'];
$suc=$_POST['txtsuc'];
$sal=$_POST['txtsal'];
$nre=$_POST['txtnre'];
$nco=$_POST['txtnco'];
$cod=$_POST['txtcod'];
$regs="UPDATE Cuenta SET idCuenta ='".$dc."','".$suc."','".$sal."','".$nre."','".$nco."','".$cod."' WHERE idCuenta='".$idc."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Cuenta.php");
?>
