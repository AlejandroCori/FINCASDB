<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$pet=$_POST['txt4'];
$pot=$_POST['txt5'];
$put=$_POST['txt6'];
$regs="INSERT INTO ComunidadVecinos(colegioID, poblacion, nombre, calle , codigoPostal, nColegiado) VALUES('".$ide."','".$nom."','".$pat."','".$pet."','".$pot."','".$put."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ComunidadVecinos.php");
?>