<?php

$dia = 3;
$mes = 2;
$anyo = 2024;

$diasEnMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

echo "<p>Fecha actual: $dia/$mes/$anyo</p>";

$dia++;
if ($dia > $diasEnMes[$mes - 1]) {
    $dia = 1;
    $mes++;
    if ($mes > 12) {
        $mes = 1;
        $anyo++;
    }
}

echo "<p>Nueva fecha: $dia/$mes/$anyo</p>";
