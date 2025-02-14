<?php

function esPar(int $num){
    return $num%2==0;
}
function arrayAleatorio(int $tam, int $min, int $max){
    $array = [];
    
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    
    return $array;
}

function arrayPares(array &$array): int {
    $contador = 0; 

    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $contador++;
        }
    }
    
    return $contador;
}






?>