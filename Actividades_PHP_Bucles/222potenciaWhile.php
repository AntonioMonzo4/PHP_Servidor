<?php

    $base = 3;
    $exponente = 4;
    $resultado = 1;
    $i = 0;

    while ($i < $exponente) {
        $resultado *= $base;
        $i++;
    }

    echo "$base elevado a  $exponente = $resultado";
?>
