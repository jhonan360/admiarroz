<?php
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $base = "admiarroz";
  
  //Conexión al servidor de bases de datos 
  $conexion = mysql_connect( $servidor, $usuario, $clave ) ; 

  //Se selecciona la base de datos 
  mysql_select_db( $base, $conexion ); 

?>