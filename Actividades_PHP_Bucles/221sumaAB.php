<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma entre A y B</title>
</head>
<body>

    <form method="GET">
        <label for="inicio">Inicio:</label>
        <input type="number" name="inicio" required>
        <label for="fin">Fin:</label>
        <input type="number" name="fin" required>
        <button type="submit">Calcular Suma</button>
    </form>

    <?php
    if (isset($_GET["inicio"]) && isset($_GET["fin"])) {
        $inicio = (int)$_GET["inicio"];
        $fin = (int)$_GET["fin"];
        
        if ($inicio > $fin) {
            echo "<p>El numero de inicio tiene que ser menor que el número final.</p>";
        } else {
            $suma = 0;
            for ($i = $inicio; $i <= $fin; $i++) {
                $suma += $i;
            }
            echo "<p>La suma de los números es: $suma</p>";
        }
    }
    ?>

</body>
</html>
