<?php
include("../conexion.php");
$cvp=$_POST['txtcvp'];
//echo $ced
$r="delete from viviendaparticular where codViviendaParticular ='".$cvp."'";
$r=mysqli_query($link, $r);
header("Location: ../T_ViviendaParticular.php");
?>