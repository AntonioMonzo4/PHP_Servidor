
<?php

    $edad = 12;
    $estado = "";

    if ($edad < 3) {
        $estado = "bebé";
    } elseif ($edad >= 3 && $edad <= 12) {
        $estado = "niño";
    } elseif ($edad >= 13 && $edad <= 17) {
        $estado = "adolescente";
    } elseif ($edad >= 18 && $edad <= 66) {
        $estado = "adulto";
    } else {
        $estado = "jubilado";
    }

    echo "<p>Edad: $edad años</p>";
    echo "<p>Estado: $estado</p>";

?>