<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares Rango</title>
</head>
<body>
    <h1>Números Pares en un Rango</h1>
    <form method="get">
        <label for="inicio">Inicio:</label>
        <input type="number" name="inicio" id="inicio" required>
        <br>
        <label for="fin">Fin:</label>
        <input type="number" name="fin" id="fin" required>
        <br>
        <button type="submit">Generar</button>
    </form>

    <?php
    if (isset($_GET['inicio']) && isset($_GET['fin'])) {
        $inicio = (int)$_GET['inicio'];
        $fin = (int)$_GET['fin'];

        if ($inicio > $fin) {
            echo "<p>El valor inicial debe ser menor o igual al valor final.</p>";
        } else {
            echo "<h2>Números Pares entre $inicio y $fin</h2>";
            echo "<ul>";

            $pares = [];
            for ($i = $inicio; $i <= $fin; $i++) {
                if ($i % 2 == 0) {
                    $pares[] = $i;
                }
            }

            shuffle($pares); 
            foreach ($pares as $num) {
                echo "<li>$num</li>";
            }

            echo "</ul>";
        }
    }
    ?>
</body>
</html>
