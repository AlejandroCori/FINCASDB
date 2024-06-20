<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$prc=$_POST['txt3'];


$regs="INSERT INTO LocalComercial(codLocalComercial   , tipo   , horario ) 
VALUES('".$nCu."','".$prt."','".$prc."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_LocalComercial.php");
?>