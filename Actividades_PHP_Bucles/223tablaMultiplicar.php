<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE MULTIPLICAR</title>
</head>
<body>

    <form method="GET">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Mostrar Tabla</button>
    </form>

    <?php
    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        echo "<table border='1'>";
        echo "<thead><tr><th>Multiplicando</th><th>*</th><th>Multiplicador</th><th>Resultado</th></tr></thead>";
        echo "<tbody>";

        $i = 1;
        while ($i <= 10) {
            echo "<tr><td>$numero</td><td>*</td><td>$i</td><td>" . ($numero * $i) . "</td></tr>";
            $i++;
        }

        echo "</tbody></table>";
    }
    ?>

</body>
</html>
