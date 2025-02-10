<?php
if (isset($_POST["num"])) {
    $numeros = $_POST["num"];
    $suma = array_sum($numeros);
    echo "La suma de los números ingresados es: $suma";
} else {
    echo "No se han recibido datos.";
}
?>
