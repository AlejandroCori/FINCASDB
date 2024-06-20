<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$prc=$_POST['txt3'];

$regs="UPDATE LocalComercial SET tipo  ='".$prt."', horario ='".$prc."' WHERE codLocalComercial ='".$nCu."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_LocalComercial.php");
?>
