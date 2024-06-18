<?php
include("../conexion.php");
$nrc=$_POST['txtnrc'];
$inp=$_POST['txtinp'];
$fec=$_POST['txtfec'];
$est=$_POST['txtest'];
$regs="INSERT INTO recibocuotacomunidad(nReciboCuota , importe , fecha , estado) VALUES('".$nrc."','".$inp."','".$fec.","''.$est"')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ReciboCuotaComunidad.php");
?>