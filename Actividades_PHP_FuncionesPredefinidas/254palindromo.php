<?php
function esPalindromo($frase) {
    $frase = strtolower($frase); 
    return $frase === strrev($frase);
}

$frasePalindromo = "Ojo rojo";
echo (esPalindromo($frasePalindromo) ? '<p> Sí </p>' : '<p> No </p> ') . "\n";
?>
