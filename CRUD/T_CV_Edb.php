<?php
include("../conexion.php");
$ced=$_POST['txt1'];
//echo $ced
$r="delete from ComunidadVecinos where colegioID   ='".$ced."'";
$r=mysqli_query($link, $r);
header("Location: ../T_ComunidadVecinos.php");
?>