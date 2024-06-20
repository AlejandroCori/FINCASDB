<?php
include("../conexion.php");
$cvp=$_POST['txtcvp'];
$nha=$_POST['txtnha'];
$regs="INSERT INTO ViviendaParticular (codViviendaParticular  , nHabitaciones ) VALUES('".$cvp."','".$nha."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ViviendaParticular.php");
?>