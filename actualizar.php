<?php
require 'conexion.php';

require 'crear_usuario.php';
// Actualizar datos del usuario
$sql = "UPDATE usuarios SET Cédula='$cedula', Nombres='$nombres', Rol='$rol', Correo='$correo', Teléfono='$telefono', Fecha='$fecha' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error actualizando el registro: " . $conn->error;
}

$conn->close();
?>