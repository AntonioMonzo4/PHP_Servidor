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
// Función para generar un conjunto de números aleatorios únicos
function generarNumerosUnicos($min, $max, $cantidad) {
    $numeros = range($min, $max);
    shuffle($numeros);
    return array_slice($numeros, 0, $cantidad);
}

// Crear un array bidimensional de 6x9 con números únicos
$fila = 6;
$columna = 9;
$totalNumeros = $fila * $columna;

$numerosUnicos = generarNumerosUnicos(100, 999, $totalNumeros);

// Llenar el array bidimensional
$array = [];
$index = 0;
for ($i = 0; $i < $fila; $i++) {
    for ($j = 0; $j < $columna; $j++) {
        $array[$i][$j] = $numerosUnicos[$index++];
    }
}

// Encontrar el número máximo y mínimo con sus posiciones
$maximo = max($numerosUnicos);
$minimo = min($numerosUnicos);

$posMax = [];
$posMin = [];

foreach ($array as $i => $fila) {
    foreach ($fila as $j => $valor) {
        if ($valor === $maximo) {
            $posMax[] = $j; // Columnas donde está el máximo
        }
        if ($valor === $minimo) {
            $posMin[] = $i; // Filas donde está el mínimo
        }
    }
}

// Mostrar el array como tabla
echo "<table border='1' cellpadding='5' cellspacing='0' style='text-align: center;'>";
foreach ($array as $i => $fila) {
    echo "<tr>";
    foreach ($fila as $j => $valor) {
        // Resaltar fila del mínimo en verde
        if (in_array($i, $posMin)) {
            echo "<td style='color: green;'>{$valor}</td>";
        }
        // Resaltar columna del máximo en azul
        elseif (in_array($j, $posMax)) {
            echo "<td style='color: blue;'>{$valor}</td>";
        } else {
            // Resto de los números en negro
            echo "<td style='color: black;'>{$valor}</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
