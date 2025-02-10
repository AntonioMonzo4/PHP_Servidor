<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingrese Datos</title>
</head>
<body>

    <?php
    if (isset($_GET["cantidad"])) {
        $cantidad = (int)$_GET["cantidad"];
        echo "<form action='224sumarDatos.php' method='POST'>";
        
        for ($i = 1; $i <= $cantidad; $i++) {
            echo "<label for='num$i'>Número $i:</label>";
            echo "<input type='number' name='num[]' required><br>";
        }
        
        echo "<button type='submit'>Sumar</button>";
        echo "</form>";
    } else {
        echo "<p>No se ha recibido una cantidad válida.</p>";
    }
    ?>

</body>
</html>
