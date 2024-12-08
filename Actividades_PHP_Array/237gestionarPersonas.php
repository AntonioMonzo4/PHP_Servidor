<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar personas</title>
</head>

<body>

</body>

</html>

<?php

$personas = $_POST['personas'];


echo "<h2>Datos de las Personas</h2>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>{$persona['nombre']}</td>";
    echo "<td>{$persona['altura']}</td>";
    echo "<td>{$persona['email']}</td>";
    echo "</tr>";
}
echo "</table>";

?>