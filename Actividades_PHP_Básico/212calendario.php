<?php

function incrementarFecha($dia, $mes, $anyo) {
    
    $diasEnMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    
    
    $dia++;
    
    
    if ($dia > $diasEnMes[$mes - 1]) {
        $dia = 1; 
        $mes++;   
        
        
        if ($mes > 12) {
            $mes = 1;
            $anyo++;  
        }
    }
    
    return [$dia, $mes, $anyo];
}

$dia = 31;
$mes = 12;
$anyo = 2023;


echo "Fecha actual: $dia/$mes/$anyo\n";


list($nuevoDia, $nuevoMes, $nuevoAnyo) = incrementarFecha($dia, $mes, $anyo);


echo "Nueva fecha: $nuevoDia/$nuevoMes/$nuevoAnyo\n";
?>
