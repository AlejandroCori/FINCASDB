<?php
include("../conexion.php");
$ced=$_POST['txt1'];
//echo $ced
$r="delete from Compania where CIF   ='".$ced."'";
$r=mysqli_query($link, $r);
header("Location: ../T_Compania.php");
?>