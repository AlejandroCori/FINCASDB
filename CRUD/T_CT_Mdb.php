<?php
include("../conexion.php");
$ide=$_POST['txtnCo'];
$cif=$_POST['txtcif'];
$col=$_POST['txtcol'];
$regs="UPDATE Contrata SET CIF  ='".$cif ."', colegioID  ='".$col."' WHERE nContrato ='".$ide."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Contrata.php");
?>
