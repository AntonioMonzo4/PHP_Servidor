<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuadrado con Bordes</title>
    <style> table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; text-align: center; } </style>
</head>
<body>

    <?php
    if (isset($_GET["tamano"])) {
        $tamano = $_GET["tamano"];
        
        echo "<table>";
        for ($i = 0; $i < $tamano; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $tamano; $j++) {
                if ($i == 0 || $i == $tamano - 1 || $j == 0 || $j == $tamano - 1) {
                    echo "<td>contenido</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No se ha recibido un tamaño válido.</p>";
    }
    ?>

</body>
</html>
