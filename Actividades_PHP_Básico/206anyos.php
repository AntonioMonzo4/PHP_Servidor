<?php
// Verificar si el parámetro 'edad' existe en la URL
//http://localhost:3000/Actividades_PHP_B%C3%A1sico/206anyos.php?edad=33

if (isset($_GET['edad']) && is_numeric($_GET['edad'])) {
    $edad = (int)$_GET['edad'];
    $anioActual = date("Y");

    // Cálculos
    $edadFutura = $edad + 10;
    $edadPasada = $edad - 10;
    $anioFuturo = $anioActual + 10;
    $anioPasado = $anioActual - 10;
    $anioJubilacion = $anioActual + (67 - $edad);

    // Mostrar resultados
    echo "<h1>Información sobre tu edad</h1>";
    echo "<p>Tu edad actual es: <strong>$edad años</strong></p>";
    echo "<p>Dentro de 10 años tendrás <strong>$edadFutura años</strong>, y será el año <strong>$anioFuturo</strong>.</p>";
    echo "<p>Hace 10 años tenías <strong>$edadPasada años</strong>, y era el año <strong>$anioPasado</strong>.</p>";

    if ($edad < 67) {
        echo "<p>Te jubilarás en el año <strong>$anioJubilacion</strong> (suponiendo que trabajas hasta los 67 años).</p>";
    } else {
        echo "<p>¡Ya deberías estar jubilado! 🎉</p>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Por favor, proporciona tu edad en la URL usando el formato <code>?edad=tu_edad</code>.</p>";
}
?>
