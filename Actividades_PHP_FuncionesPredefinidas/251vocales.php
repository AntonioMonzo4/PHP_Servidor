<?php
function contarVocales($frase) {
    $vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
    $frase = strtolower($frase); 
    
    foreach (str_split($frase) as $letra) {
        if (isset($vocales[$letra])) {
            $vocales[$letra]++;
        }
    }
    
    $totalVocales = array_sum($vocales);
    
    return [
        'vocales' => $vocales,
        'total' => $totalVocales
    ];
}

//PRUEBA RÁPIDA
$frase = "Hola, esto es una prueba";
$resultado = contarVocales($frase);
echo "Cantidad de vocales: \n";
foreach ($resultado['vocales'] as $vocal => $cantidad) {
    echo "$vocal: $cantidad\n";
}
echo "Total de vocales: " . $resultado['total'] . "\n";
?>
