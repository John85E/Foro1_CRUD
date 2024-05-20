<?php
require 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Cédula = isset($_POST['Cédula']) ? $_POST['Cédula'] : '';
    $Nombres = isset($_POST['Nombres']) ? $_POST['Nombres'] : '';
    $Rol = isset($_POST['Rol']) ? $_POST['Rol'] : '';
    $Correo = isset($_POST['Correo']) ? $_POST['Correo'] : '';
    $Télefono = isset($_POST['Télefono']) ? $_POST['Télefono'] : '';
    $Fecha = isset($_POST['Fecha']) ? $_POST['Fecha'] : '';
}

$sql = "INSERT INTO usuarios (Cédula, Nombres, Rol, Correo, Télefono, Fecha) VALUES ('$Cédula', '$Nombres', '$Rol', '$Correo', '$Télefono', '$Fecha')";

if (mysqli_query($conexion, $sql)) {
    echo "Usuario creado";
    header("index.html"); // 
    exit; // 
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>