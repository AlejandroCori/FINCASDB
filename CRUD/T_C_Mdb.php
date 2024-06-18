<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$pet=$_POST['txt4'];
$pot=$_POST['txt5'];
$put=$_POST['txt6'];
$patt=$_POST['txt7'];
$regs = "UPDATE Contrata SET personaContacto = '".$nom."', telefonoContacto   = '".$pat."', sector    = '".$pet."', direccion   = '".$pot."', nombre   = '".$put."', telefono   = '".$patt."' WHERE CIF  = '".$ide."'";
header("Location: ../T_Compania.php");
?>
