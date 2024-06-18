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
/*$nprt=$_POST['txtnprt'];
$colit=$_POST['txtcolid'];
*/
$regs="INSERT INTO propiedad(nCuenta , portal , porcentanje , letra , planta , telefono , contacto , nInquilino , direccionPropietario ) VALUES('".$nCu."','".$prt."','".$prc."','".$ltr."','".$plt."','".$tel."','".$inq."','".$dprt."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Propiedad.php");
?>