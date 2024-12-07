<?php

$a=4;
$b=7;
$c=10;

if ($a == 0) {
    if ($b == 0) {
        echo $c == 0 ? "La ecuación tiene infinitas soluciones.\n" : "La ecuación no tiene solución.\n";
    } else {
        $x = -$c / $b;
        echo "La ecuación es lineal. Solución: x = $x\n";
    }
} else {
    
    $num = pow($b, 2) - 4 * $a * $c;

    if ($num > 0) {
        
        $x1 = (-$b + sqrt($num)) / (2 * $a);
        $x2 = (-$b - sqrt($num)) / (2 * $a);
        echo "La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2\n";
    } elseif ($num == 0) {
        
        $x = -$b / (2 * $a);
        echo "La ecuación tiene una solución única: x = $x\n";
    } else {
        
        echo "La ecuación no tiene soluciones reales.\n";
    }
}
?>
