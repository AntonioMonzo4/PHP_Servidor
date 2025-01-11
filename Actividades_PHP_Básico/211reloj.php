
    <?php
    $hora = 15;
    $minuto = 41;
    $segundo = 59;

    echo "<p>Hora actual: $hora:$minuto:$segundo</p>";

    $segundo++;
    if ($segundo > 59) {
        $segundo = 0;
        $minuto++;
    }
    if ($minuto > 59) {
        $minuto = 0;
        $hora++;
    }
    if ($hora > 23) {
        $hora = 0;
    }

    echo "<p>Nueva hora: $hora:$minuto:$segundo</p>";
    ?>