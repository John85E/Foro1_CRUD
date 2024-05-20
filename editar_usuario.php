<?php


$Cédula = $_GET['Cédula'];

$sql = "SELECT * FROM tabla WHERE Cédula = $Cédula";

$resultado = mysqli_query($conexion, $sql);


if (mysqli_num_rows($resultado) > 0) {
   
    $row = mysqli_fetch_assoc($resultado);
    
    echo '<form action="actualizar.php" method="post">';
    echo '<input type="hidden" name="Cédula" value="' . $Cédula. '">';
   

    echo '<button type="submit">Actualizar</button>';
    echo '</form>';
} else {
    echo "No se encontró el registro";
}

mysqli_close($conexion);
?>