<?php

$monedas = [500, 200, 100, 50, 20, 10, 5, 2, 1];
$resultado = [];

$cantidad = 42225;


foreach ($monedas as $moneda) {
    $cantidad_monedas = floor($cantidad / $moneda);
    if ($cantidad_monedas > 0) {
        $resultado[$moneda] = $cantidad_monedas; 
        $cantidad -= $cantidad_monedas * $moneda; 
    }
}


echo "<ul>";
foreach ($resultado as $moneda => $cantidad) {
    echo "<li>$moneda: $cantidad monedas</li>";
}
echo "</ul>";
?>
