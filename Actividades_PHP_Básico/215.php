<?php

//La función match es la "fusión" de una comparación estricta === y un switch 


$color = 'verde';

$resultado = match ($color) {
    'rojo' => 'El color es rojo.',
    'verde' => 'El color es verde.',
    'azul' => 'El color es azul.',
    default => 'Color no reconocido.',
};

echo $resultado;


?>