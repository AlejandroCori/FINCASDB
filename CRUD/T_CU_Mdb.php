<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$prc=$_POST['txt3'];
$ltr=$_POST['txt4'];
$plt=$_POST['txt5'];
$tel=$_POST['txt6'];
$inq=$_POST['txt7'];
$regs="UPDATE Cuenta SET DC  ='".$prt."', sucursal  ='".$prc."', saldo  ='".$ltr."', nRecibo  ='".$plt."', nContrato  ='".$tel."', codBanco   ='".$inq."' WHERE codBanco ='".$nCu."'";
header("Location: ../T_Cuenta.php");
?>
