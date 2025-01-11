<?php

if (isset($_GET['edad']) && is_numeric($_GET['edad'])) {

    $edad = $_GET['edad'];
    $anioActual = date("Y");

    $edadDespues = $edadPresente + 10;
    $edadAntes = $edadPresente - 10;
    $anioDespues = $anioActual + 10;
    $anioAntes = $anioActual - 10;
    $anioJubilacion = $anioActual + (67 - $edad);

    echo "<h1>Información</h1>";
    echo "<p>Tu edad es: $edad años</p>";
    echo "<p>En 10 años tendrás $edadDespues años y será el año $anioDespues.</p>";
    echo "<p>Hace 10 años tenías $edadAntes años y era el año $anioAntes.</p>";

    if ($edad < 67) {
        echo "<p>Te jubilas en: $anioJubilacion (67 años pero tal y como va la cosa...).</p>";
    } else {
        echo "<p>¡ESTÁS JUBILADO! </p>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Introduce la edad via URL.</p>";
}
?>
