<?php
include("../conexion.php");
$nco=$_POST['txtnCo'];
//echo $ced
$r="delete from Contrata where nContrato ='".$nco."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Contrata.php");
?>