<?php
include("../conexion.php");
$idc=$_POST['txtidc'];
$dc=$_POST['txtdc'];
$suc=$_POST['txtsuc'];
$sal=$_POST['txtsal'];
$nre=$_POST['txtnre'];
$nco=$_POST['txtnco'];
$cod=$_POST['txtcod'];
$regs="INSERT INTO Cuenta(idCuenta , DC , sucursal , saldo , nRecibido , nContrato , codBanco) VALUES('".$idc."','".$dc."','".$suc."''".$sal."','".$nre."','".$nco."','".$cod."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Cuenta.php");
?>