<?php


$Nombres = $_GET[' Nombres'];

$sql = "SELECT * FROM tabla WHERE Nombres = $Nombres";


$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    
    // Obtener los datos del registro
    $row = mysqli_fetch_assoc($resultado);
   
    
    echo '<form action="actualizar.php" method="post">';
    echo '<input type="hidden" name="Nombre" value="' . $Nombres . '">';
    

    echo '<button type="submit">Actualizar</button>';
    echo '</form>';
} else {
    echo "No se encontró el registro";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>