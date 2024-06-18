<?php
include("../conexion.php");
$ide=$_POST['txtnCo'];
$nom=$_POST['txtdni'];
$pat=$_POST['txtnom'];
$regs="UPDATE administrador SET DNI ='".$nom ."', Nombre ='".$pat."' WHERE nColegiado='".$ide."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Administrador.php");
?>
