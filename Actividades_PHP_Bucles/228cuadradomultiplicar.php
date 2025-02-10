<?php
echo "<h1>Tabla de Multiplicar (1-10)</h1>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>*</th>"; 

for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<th>$i</th>"; 

    for ($j = 1; $j <= 10; $j++) {
        $producto = $i * $j;
        echo "<td>$producto</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
