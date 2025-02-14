<?php
$numeros = array();

for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(0, 99);
}

echo "<h1>Lista de 50 Números Aleatorios</h1>";
echo "<ul>";

foreach ($numeros as $numero) {
    echo "<li>$numero</li>";
}

echo "</ul>";
