<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$prc=$_POST['txt3'];
$ltr=$_POST['txt4'];

$regs="INSERT INTO ReciboCuotaComunidad (nReciboCuota    , importe    , fecha  , estado ) 
VALUES('".$nCu."','".$prt."','".$prc."','".$ltr."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ReciboCuotaComunidad.php");
?>