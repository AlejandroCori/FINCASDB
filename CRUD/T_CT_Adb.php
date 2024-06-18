<?php
include("../conexion.php");
$ide=$_POST['txtnCo'];
$cif=$_POST['txtcif'];
$col=$_POST['txtcol'];
$regs="INSERT INTO Contrata(nContrato , CIF , ColegioID) VALUES('".$ide."','".$cif."','".$col."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Contrata.php");
?>