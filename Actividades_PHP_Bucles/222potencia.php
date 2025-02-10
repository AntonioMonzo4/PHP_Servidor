<?php
    $base = 3;
    $exponente = 4;
    $resultado = 1; 

    for ($i = 0; $i < $exponente; $i++) {
        $resultado *= $base;
    }

    echo "$base elevado a  $exponente = $resultado";
?>
