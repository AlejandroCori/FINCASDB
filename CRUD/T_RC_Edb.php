<?php
include("../conexion.php");
$cu=$_POST['txtcu'];
//echo $ced
$r="delete from ReciboCuotaComunidad where nReciboCuota  ='".$cu."'";
$r=mysqli_query($link, $r);
header("Location: ../T_ReciboCuotaComunidad.php ");
?>