<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tam = intval($_POST['tam']); 

    if ($tam < 1 || $tam > 20) {
        echo "El tamaño debe ser entre 1 y 20.";
        exit;
    }

    echo "<h1>Tabla con las Diagonales</h1>";
    echo "<table border='1' cellpadding='7' cellspacing='5'>";
    for ($i = 0; $i < $tam; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $tam; $j++) {
            if ($i == $j) {
                echo "<td>X</td>";
            }
            elseif ($i + $j == $tam - 1) {
                echo "<td>X</td>";
            }
            else {
                echo "<td>&nbsp;</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
