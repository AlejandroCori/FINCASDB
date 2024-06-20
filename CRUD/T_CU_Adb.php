<?php
include("../conexion.php");
$idc=$_POST['txt1'];
$dc=$_POST['txt2'];
$suc=$_POST['txt3'];
$sal=$_POST['txt4'];
$nre=$_POST['txt5'];
$nco=$_POST['txt6'];
$cod=$_POST['txt7'];
$regs="INSERT INTO Cuenta(idCuenta  , DC , sucursal , saldo , nRecibido , nContrato , codBanco) VALUES('".$idc."','".$dc."','".$suc."''".$sal."','".$nre."','".$nco."','".$cod."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Cuenta.php");
?>