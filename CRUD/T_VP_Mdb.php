<?php
include("../conexion.php");
$cvp=$_POST['txtcvp'];
$nha=$_POST['txtnha'];
$regs="UPDATE ViviendaParticular SET , nHabitaciones  ='".$nha."' WHERE codViviendaParticular   ='".$cvp ."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ViviendaParticular.php");
?>
