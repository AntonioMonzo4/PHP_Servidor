<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NÚMEROS RANDOM</title>
</head>
<body>
    
</body>
</html>
<?php
function generarNumerosAleatorios($min, $max, $cantidad) {
    $numeros = range($min, $max);
    shuffle($numeros);
    return array_slice($numeros, 0, $cantidad);
}

$fila = 6;
$columna = 9;
$totalNumeros = $fila * $columna;
$array = [];
$index = 0;
$posMax = [];
$posMin = [];


$numerosUnicos = generarNumerosAleatorios(100, 999, $totalNumeros);


for ($i = 0; $i < $fila; $i++) {
    for ($j = 0; $j < $columna; $j++) {
        $array[$i][$j] = $numerosUnicos[$index++];
    }
}

$maximo = max($numerosUnicos);
$minimo = min($numerosUnicos);

foreach ($array as $i => $fila) {
    foreach ($fila as $j => $valor) {
        if ($valor === $maximo) {
            $posMax[] = $j; 
        }
        if ($valor === $minimo) {
            $posMin[] = $i; 
        }
    }
}

echo "<table border='1' cellpadding='5' cellspacing='0' style='text-align: center;'>";
foreach ($array as $i => $fila) {
    echo "<tr>";
    foreach ($fila as $j => $valor) {
        if (in_array($i, $posMin)) {
            echo "<td style='color: green;'>{$valor}</td>";
        }
        elseif (in_array($j, $posMax)) {
            echo "<td style='color: blue;'>{$valor}</td>";
        } else {
            echo "<td>{$valor}</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
