<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
</head>
<body>
    <h1>Tabla de Datos Personales</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Recoger los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        
        // Mostrar los datos en una tabla
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";
        echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
        echo "<tr><td>Apellido</td><td>$apellido</td></tr>";
        echo "<tr><td>Edad</td><td>$edad</td></tr>";
        echo "<tr><td>Correo Electrónico</td><td>$email</td></tr>";
        echo "</table>";
    } else {
        echo "<p>No se recibieron datos. Por favor, complete el formulario.</p>";
    }
    ?>
    <br>
    <a href="204datosPersonales.html">Volver al formulario</a>
</body>
</html>
