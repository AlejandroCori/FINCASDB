<?php
include("../conexion.php");
$nrc=$_POST['txtnrc'];
$inp=$_POST['txtinp'];
$fec=$_POST['txtfec'];
$est=$_POST['txtest'];
$regs="UPDATE recibocuotacomunidad(nReciboCuota SET importe ='".$inp."', fecha ='".$fec."', estado ='".$est."' WHERE nReciboCuota='".$nrc."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_ReciboCuotaComunidad.php");
?>
