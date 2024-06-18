<?php
include("../conexion.php");
$cod=$_POST['txtcod'];
$act=$_POST['txtact'];
$regs="UPDATE Oficina SET codOficina ='".$act ."', WHERE codOficina='".$cod."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Oficina.php");
?>