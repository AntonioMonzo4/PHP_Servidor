<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// Función para incrementar el tiempo en 1 segundo
function incrementarTiempo($hora, $minuto, $segundo) {
    $segundo++;
    
    // Verificar si los segundos superan 59
    if ($segundo > 59) {
        $segundo = 0;
        $minuto++;
    }
    
    // Verificar si los minutos superan 59
    if ($minuto > 59) {
        $minuto = 0;
        $hora++;
    }
    
    // Verificar si las horas superan 23
    if ($hora > 23) {
        $hora = 0;
    }
    
    return [$hora, $minuto, $segundo];
}

// Valores iniciales
$hora = 23;
$minuto = 59;
$segundo = 59;

// Mostrar hora actual
echo "Hora actual: $hora:$minuto:$segundo\n";

// Incrementar en un segundo
list($nuevaHora, $nuevoMinuto, $nuevoSegundo) = incrementarTiempo($hora, $minuto, $segundo);

// Mostrar nueva hora
echo "Nueva hora: $nuevaHora:$nuevoMinuto:$nuevoSegundo\n";
?>
