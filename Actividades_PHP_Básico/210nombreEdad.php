<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANGO EDAD</title>
</head>

<body>

</body>

</html>

<?php
// Leer la edad desde la URL, por ejemplo: 210nombreEdad.php?edad=25
if (isset($_GET['edad']) && is_numeric($_GET['edad'])) {
    $edad = intval($_GET['edad']); // Convertir la edad a entero
    $categoria = "";

    // Clasificar según la edad
    if ($edad < 3) {
        $categoria = "bebé";
    } elseif ($edad >= 3 && $edad <= 12) {
        $categoria = "niño";
    } elseif ($edad >= 13 && $edad <= 17) {
        $categoria = "adolescente";
    } elseif ($edad >= 18 && $edad <= 66) {
        $categoria = "adulto";
    } else {
        $categoria = "jubilado";
    }

    // Mostrar el resultado
    echo "<h1>Categoría por edad</h1>";
    echo "<p>Edad proporcionada: <strong>$edad años</strong></p>";
    echo "<p>Clasificación: <strong>$categoria</strong></p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>Por favor, proporciona una edad válida en la URL usando el formato <code>?edad=valor</code>.</p>";
}
?>