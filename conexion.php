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
?>