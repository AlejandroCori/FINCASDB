<?php
include("../conexion.php");
$ced=$_POST['txtide'];
//echo $ced
$r="delete from administrador where nColegiado ='".$ced."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Administrador.php");
?>