<?php
$frase = "Esta frase es una frase muy especial y no se hable más";

$palabras = explode(" ", $frase);

$totalLetras = 0;
$totalPalabras = count($palabras);

foreach ($palabras as $palabra) {
    $totalLetras += strlen($palabra); 
    echo "Palabra: '$palabra', Tamaño: " . strlen($palabra) . " letras\n"; 
}

echo "\nTotal de letras: $totalLetras\n";
echo "Cantidad de palabras: $totalPalabras\n";
?>
