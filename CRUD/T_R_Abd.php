<?php
include("../conexion.php");
$re=$_POST['txtnre'];
$fec=$_POST['txtfec'];
$imp=$_POST['txtimp'];
$num=$_POST['txtnum'];
$cif=$_POST['txtcif'];

$regs="INSERT INTO recibo(nRecibo , fecha , importe , numero , CIF ) VALUES('".$re."','".$fec."','".$imp."','".$num."','".$cif."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Recibo.php");
?>