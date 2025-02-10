<?php

    $base = 3;
    $exponente = 4;
    $resultado = 1;
    $i = 0;

    do {
        $resultado *= $base;
        $i++;
    } while ($i < $exponente);

    echo "$base elevado a  $exponente = $resultado";
?>
