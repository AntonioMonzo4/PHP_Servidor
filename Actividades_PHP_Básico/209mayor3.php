<?php
// Leer los valores de la URL, por ejemplo: 209mayor3.php?a=10&b=25&c=15
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    $a = intval($_GET['a']);
    $b = intval($_GET['b']);
    $c = intval($_GET['c']);

    // Calcular el mayor sin usar operadores lógicos
    $mayor = max(max($a, $b), $c); // Encuentra el mayor usando max()

    // Mostrar el resultado
    echo "<h1>Mayor de tres números</h1>";
    echo "<p>Los números son: $a, $b, $c</p>";
    echo "<p>El mayor número es: <strong>$mayor</strong></p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>Proporciona los números en la URL usando el formato <code>?a=valor1&b=valor2&c=valor3</code>.</p>";
}
?>
