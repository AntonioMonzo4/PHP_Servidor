<?php

$a = 42;
$b = 7;
$c = 10;

if ($a == 0 && $b == 0) {
    if ($c == 0) {
        echo "Infinitas soluciones.";
    } else {
        echo "No tiene solución.";
    }
} elseif ($a == 0) {
    $x = -$c / $b;
    echo "Solución lineal: x = $x";
} else {
    $nums = $b * $b - 4 * $a * $c; 

    if ($nums > 0) {
        $x1 = (-$b + sqrt($nums)) / (2 * $a);
        $x2 = (-$b - sqrt($nums)) / (2 * $a);
        echo "Dos soluciones reales: x1 = $x1, x2 = $x2";
    } elseif ($nums == 0) {
        $x = -$b / (2 * $a);
        echo "Solución: x = $x";
    } else {
        echo "No tiene soluciones con números reales.(i)";
    }
}
?>
