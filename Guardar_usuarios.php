<?php


$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];


$sql = "INSERT INTO usuarios (cedula, nombres, rol, correo, telefono, fecha) 
        VALUES ('$cedula', '$nombres', '$rol', '$correo', '$telefono', '$fecha')";

if ($conn->query($sql) === TRUE) {
  echo "Usuario registrado exitosamente";
} else {
  echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();


header("Location: index.html");
exit();
?>