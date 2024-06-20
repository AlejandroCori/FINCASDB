<?php
include("../conexion.php");
$re=$_POST['txtnre'];
//echo $ced
$r="delete from Recibo where nRecibo ='".$re."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Recibo.php");
?>