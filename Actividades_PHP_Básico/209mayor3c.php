<?php

    $a = 42;
    $b = 4;
    $c = 7;

    if ($a >= $b && $a >= $c) {
        $num = $a;
    } elseif ($b >= $a && $b >= $c) {
        $num = $b;
    } else {
        $num = $c;
    }

    echo "<p>Los números son: $a, $b, $c</p>";
    echo "<p>El mayor número es: $num</p>";

?>
