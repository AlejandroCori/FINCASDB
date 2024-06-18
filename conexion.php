<?php
   // Dirección o IP del servidor MySQL
   $host = "localhost"; //"127.0.0.1"
   // Puerto del servidor MySQL
   $puerto = 3306; // Debe ser un entero, no una cadena
   // Nombre de usuario del servidor MySQL
   $usuario = "root";
   // Contraseña del usuario
   $contrasena = "";
   // Nombre de la base de datos
   $baseDeDatos ="fincas";

   $Conexion = new  mysqli($host, $usuario, $contrasena, $baseDeDatos, $puerto);

   if (!$Conexion) {
       echo "Fallo al conectar a MySQL";
   }
   
   return $Conexion;

   function Conectarse()
   {
     global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
     if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
     { 
        echo "Error conectando a la base de datos.<br>"; 
       exit(); 
            }
     else
      {
       //echo "Listo, estamos conectados.<br>";
      }
     if (!mysqli_select_db($link, $baseDeDatos)) 
      { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
       //echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
     }
        return $link; 
    } 
 
    $link = Conectarse();
 

?>