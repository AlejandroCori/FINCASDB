<?php
include("../conexion.php");
$cvp=$_POST['txtcvp'];
$nha=$_POST['txtnha'];
$regs="UPDATE viviendaparticular SET , nha ='".$nha."' WHERE codViviendaParticular ='".$cvp ."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ViviendaParticular.php");
?>
