<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$prc=$_POST['txt3'];
$ltr=$_POST['txt4'];

$regs="UPDATE ReciboCuotaComunidad SET importe  ='".$prt."', fecha  ='".$prc."', estado  ='".$ltr."' WHERE nReciboCuota ='".$nCu."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ReciboCuotaComunidad.php");
?>
