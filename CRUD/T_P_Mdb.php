<?php
include("../conexion.php");
$nCu=$_POST['txtnCu'];
$prt=$_POST['txtprt'];
$prc=$_POST['txtimp'];
$ltr=$_POST['txtltr'];
$plt=$_POST['txtplt'];
$tel=$_POST['txttel'];
$inq=$_POST['txtinq'];
$dprt=$_POST['txtdprt'];
$regs="UPDATE propiedad SET portal ='".$prt."', porcentaje ='".$prc."', letra ='".$ltr."', planta ='".$plt."', telefono ='".$tel."', inquilino ='".$inq."', departamento ='".$dprt."' WHERE nCuenta='".$nCU."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Administrador.php");
?>
