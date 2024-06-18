<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$regs="INSERT INTO Banco(codBanco, contacto, nombre) VALUES('".$ide."','".$nom."','".$pat."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Banco.php");
?>