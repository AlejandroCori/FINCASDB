<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$regs="UPDATE Oficina SET actividad  ='".$prt."' WHERE codOficina ='".$nCu."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Oficina.php");
?>
