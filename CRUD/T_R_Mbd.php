<?php
include("../conexion.php");
$re=$_POST['txtnre'];
$fec=$_POST['txtfec'];
$imp=$_POST['txtimp'];
$num=$_POST['txtnum'];
$cif=$_POST['txtcif'];
$regs="UPDATE recibo SET fecha ='".$fec ."', importe ='".$imp."', numero ='".$num."', CIF ='".$cif."' WHERE nRecibo='".$re."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Recibo.php");
?>
