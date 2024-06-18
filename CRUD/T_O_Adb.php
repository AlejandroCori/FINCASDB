<?php
include("../conexion.php");
$cod=$_POST['txtcod'];
$act=$_POST['txtact'];
$regs="INSERT INTO Oficina(codOficina , actividad) VALUES('".$cod."','".$act."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Oficina.php");
?>