<?php

$host = "127.0.0.1:3399"; 
$user = "JohnSe"; 
$password = ""; 
$database = "Registro de Usuarios"; 

$conexion = mysqli_connect($host, $user, $password, $database);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos";
?>