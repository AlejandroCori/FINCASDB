<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$pet=$_POST['txt4'];
$pot=$_POST['txt5'];
$put=$_POST['txt6'];
$regs = "UPDATE ComunidadVecinos SET poblacion  = '".$nom."', nombre = '".$pat."', calle= '".$pet."', codigoPostal= '".$pot."', nColegiado= '".$put."' WHERE colegioID = '".$ide."'";
header("Location: ../T_ComunidadVecinos.php");
?>
