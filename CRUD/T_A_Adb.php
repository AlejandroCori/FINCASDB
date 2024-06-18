<?php
include("../conexion.php");
$ide=$_POST['txtnCo'];
$nom=$_POST['txtdni'];
$pat=$_POST['txtnom'];
$regs="INSERT INTO administrador(nColegiado , DNI , Nombre) VALUES('".$ide."','".$nom."','".$pat."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Administrador.php");
?>