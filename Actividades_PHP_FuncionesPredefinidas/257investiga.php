<?php
// ucwords: Convierte la primera letra de cada palabra en mayúscula
$texto = "que raro escribir cada letra en minus";
echo ucwords($texto) . "\n"; // Salida: Hola Mundo

// strrev: Invierte una cadena de texto
$texto = "A por el 10";
echo strrev($texto) . "\n"; 

// str_repeat: Repite una cadena un número específico de veces
$texto = "Tengo que aprobar ";
echo str_repeat($texto, 3) . "\n"; 

// md5: Genera un hash MD5 de una cadena
$texto = "Voy a poner a este chico un 10 ";
echo md5($texto) . "\n"; 
?>
