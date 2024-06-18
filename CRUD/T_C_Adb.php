<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$pet=$_POST['txt4'];
$pot=$_POST['txt5'];
$put=$_POST['txt6'];
$patt=$_POST['txt7'];
$regs="INSERT INTO Compania(CIF, personaContacto, telefonoContacto, sector, direccion, nombre, telefono) VALUES('".$ide."','".$nom."','".$pat."','".$pet."','".$pot."','".$put."','".$patt."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Compania.php");
?>