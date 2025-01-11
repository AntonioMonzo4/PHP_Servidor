<?php


//El operador espacial <=> sirve como estrutura de comparación si el resultado de este es 0 ambos son iguales, si es 1 la primera variable es mayor y si es -1 la segunda variable.


$a = 4;
$b = 10;

$resultado = $a <=> $b;

if ($resultado === 0) {
    echo "Los números son iguales.";
} elseif ($resultado === -1) {
    echo "El primer número es menor que el segundo.";
} else {
    echo "El primer número es mayor que el segundo.";
}


//Tambien se puede usar mediante con cadenas de texto


$cadena1 = "hola";
$cadena2 = "mundo";

$resultado = $cadena1 <=> $cadena2;

if ($resultado === 0) {
    echo "Las cadenas son iguales.";
} elseif ($resultado === -1) {
    echo "La primera cadena es menor que la segunda.";
} else {
    echo "La primera cadena es mayor que la segunda.";
}
?>
