<?php
require_once '../CONTROLADOR/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    $actividad = $_POST['actividad'];
    $objetivo = $_POST['objetivo'];

    // Actualizar datos en la base de datos
    $sql = "UPDATE usuarios SET nombre = ?, peso = ?, altura = ?, fecha_nacimiento = ?, sexo = ?, actividad = ?, objetivo = ? WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sddsssss", $nombre, $peso, $altura, $fechaNacimiento, $sexo, $actividad, $objetivo, $email);

    if ($stmt->execute()) {
        echo "<p>Usuario actualizado correctamente.</p>";
    } else {
        echo "<p>Error al actualizar usuario.</p>";
    }

    echo '<a href="../VISTA/index.php">Volver</a>';
    $stmt->close();
    $conexion->close();
}
?>
