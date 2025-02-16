<?php
$frase = "Esta frase es menos especial que la anterior ";

$totalPalabras = str_word_count($frase);

echo "Total de palabras: $totalPalabras\n";

$palabras = str_word_count($frase, 1);

foreach ($palabras as $palabra) {
    echo "Palabra: '$palabra', Tamaño: " . strlen($palabra) . " letras\n";
}
?>
