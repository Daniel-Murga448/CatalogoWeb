<?php
// Configuración de las credenciales de la base de datos local 
$host = "sql313.infinityfree.com";
$usuario = "if0_42052539";
$password = "vTXjB6v7EW7D2"; 
$base_datos = "if0_42052539_catalogoweb"; 

// Creamos la conexión utilizando la extensión mysqli
$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Verificamos si hubo algún error en la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Configura el juego de caracteres a UTF-8 para evitar problemas con tildes y eñes
$conexion->set_charset("utf8mb4");
?>