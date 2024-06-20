<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$pet=$_POST['txt4'];
$pot=$_POST['txt5'];
$put=$_POST['txt6'];
$regs="UPDATE Cuenta SET portal ='".$prt."', porcentaje ='".$prc."', letra ='".$ltr."', planta ='".$plt."', telefono ='".$tel."', contacto  ='".$inq."', nInquilino  ='".$drt."', nPropietario  ='".$ast."', direccionPropietario  ='".$nor."' , colegioID  ='".$hat."' WHERE nCuenta='".$nCu."'";
header("Location: ../T_ComunidadVecinos.php");
?>
