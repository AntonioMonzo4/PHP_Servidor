<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
</head>
<body>
    <h1>Datos Personales</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $anyo = $_POST['anyo'];
        $email = $_POST['email'];
        $tlfn = $_POST['tlfn'];
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
        echo "<tr><td>Apellido</td><td>$apellido</td></tr>";
        echo "<tr><td>Edad</td><td>$anyo</td></tr>";
        echo "<tr><td>Teléfono</td><td>$tlfn</td></tr>";
        echo "<tr><td>Correo Electrónico</td><td>$email</td></tr>";
        echo "</table>";
    } else {
        echo "<p>No se han obtenido los datos.</p>";
    }
    ?>

</body>
</html>
