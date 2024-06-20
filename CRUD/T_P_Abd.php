<?php
include("../conexion.php");
$nCu=$_POST['txt1'];
$prt=$_POST['txt2'];
$prc=$_POST['txt3'];
$ltr=$_POST['txt4'];
$plt=$_POST['txt5'];
$tel=$_POST['txt6'];
$inq=$_POST['txt7'];
$drt=$_POST['txt8'];
$ast=$_POST['txt9'];
$nor=$_POST['txt10'];
$hat=$_POST['txt11'];

$regs="INSERT INTO propiedad(nCuenta  , portal  , porcentaje  , letra  , planta  , telefono  , contacto  , nInquilino  , nPropietario ,direccionPropietario , colegioID  ) 
VALUES('".$nCu."','".$prt."','".$prc."','".$ltr."','".$plt."','".$tel."','".$inq."','".$drt."','".$ast."','".$nor."','".$hat."')";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Propiedad.php");
?>