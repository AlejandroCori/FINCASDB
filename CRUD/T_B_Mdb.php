<?php
include("../conexion.php");
$ide=$_POST['txt1'];
$nom=$_POST['txt2'];
$pat=$_POST['txt3'];
$regs="UPDATE Banco SET contacto  ='".$nom ."', nombre='".$pat."' WHERE codBanco ='".$ide."'";
$regs=mysqli_query($link,$regs);
header("Location: ../T_Banco.php");
?>
