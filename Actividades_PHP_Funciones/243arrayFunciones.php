<?php

$ops = ['sumar', 'restar', 'multiplicar', 'dividir'];

$a = $_GET['a'] ?? 1;

$b = $_GET['b'] ?? 1;

foreach ($ops as $op) {

    echo "<p> $op: " . $op($a, $b) . "</p><br>";
}
