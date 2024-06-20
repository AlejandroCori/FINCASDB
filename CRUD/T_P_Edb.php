<?php
include("../conexion.php");
$cu=$_POST['txtcu'];
//echo $ced
$r="delete from propiedad where nCuenta ='".$cu."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Propiedad.php ");
?>