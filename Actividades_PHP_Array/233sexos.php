<?php
$sexos = array();

for ($i = 0; $i < 100; $i++) {
    $sexos[] = (rand(0, 1) == 0) ? "M" : "F";//INTENTO DE USO DEL OPERADOR TERNARIO
}

$resultado = ["M" => 0, "F" => 0];

foreach ($sexos as $sexo) {
    $resultado[$sexo]++;
}


echo "<h1>Resultado del Conteo de Sexos</h1>";
echo "<ul>";
foreach ($resultado as $sexo => $cantidad) {
    echo "<li>$sexo: $cantidad</li>";
}
echo "</ul>";
?>
