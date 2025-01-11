<?php

if (isset($_GET['cantidad'])) {
    $monto = intval($_GET['cantidad']);
    //Reciclando un ejercicio de java del año anterior para hacer pruebas de foreach
    foreach ([500, 200, 100, 50, 20, 10, 5, 2, 1] as $denominacion) {
        if ($monto >= $denominacion) {
            echo intdiv($monto, $denominacion) . ($denominacion >= 5 ? " billete(s)" : " moneda(s)") . " de $denominacion<br>";
            $monto %= $denominacion;
        }
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Introduce la cantidad via URL.</p>";}
?>
