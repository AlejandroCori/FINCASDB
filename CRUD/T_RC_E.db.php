<?php
include("../conexion.php");
$nrc=$_POST['txtnrc'];

$r="delete from recibocuotacomunidad where nReciboCuota ='".$nrc."'";
$r=mysqli_query($link, $r);
header("Location: ../T_ReciboCuotaComunidad.php");
?>