<?php
include("../conexion.php");
$ced=$_POST['txt1'];
//echo $ced
$r="delete from Banco where codBanco  ='".$ced."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Banco.php");
?>