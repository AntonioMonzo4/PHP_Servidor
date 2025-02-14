<?php

function mayor(): int {
    $numeros = func_get_args();
    
    $mayor = $numeros[0];
    
    foreach ($numeros as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }
    
    return $mayor;
}


function concatenar(...$palabras): string {
    return implode(' ', $palabras);
}


?>