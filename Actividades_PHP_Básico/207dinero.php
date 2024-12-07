<?php
// Leer el valor desde la URL, por ejemplo: 207dinero.php?cantidad=139
if (isset($_GET['cantidad']) && is_numeric($_GET['cantidad'])) {
    $cantidad = intval($_GET['cantidad']); // Convertir el valor a entero
    $denominaciones = [500, 200, 100, 50, 20, 10, 5, 2, 1]; // Billetes y monedas disponibles
    $resultado = [];

    // Calcular la cantidad de cada billete/moneda
    foreach ($denominaciones as $denominacion) {
        $resultado[$denominacion] = intdiv($cantidad, $denominacion); // Dividir para obtener la cantidad
        $cantidad %= $denominacion; // Actualizar la cantidad restante
    }

    // Mostrar el resultado
    echo "<h1>Descomposición del dinero</h1>";
    foreach ($resultado as $denominacion => $cantidad) {
        $tipo = $denominacion >= 5 ? "billete" : "moneda";
        echo "$cantidad $tipo(s) de $denominacion<br>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Por favor, proporciona una cantidad válida en la URL usando el formato <code>?cantidad=valor</code>.</p>";
}
?>
