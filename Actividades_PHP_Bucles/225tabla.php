<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generada</title>
    <style> 
        table, th, td { 
            border: 1px solid black; 
            border-collapse: collapse; 
            padding: 5px; 
        } 
    </style>
</head>


<body>

    <?php
    if (isset($_GET["filas"]) && isset($_GET["columnas"])) {
        $filas = $_GET["filas"];
        $columnas = $_GET["columnas"];
        
        echo "<table>";
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                echo "<td>($i, $j)</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No se han recibido datos válidos.</p>";
    }
    ?>

</body>
</html>
