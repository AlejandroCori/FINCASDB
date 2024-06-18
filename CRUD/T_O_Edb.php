<?php
include("../conexion.php");
$cod=$_POST['txtcod'];
//echo $ced
$r="delete from Oficina where codOficina ='".$cod."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Oficina.php");
?>