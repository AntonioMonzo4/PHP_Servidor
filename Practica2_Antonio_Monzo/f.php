<?php
// Recibir datos del formulario
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];
$cintura = $_POST['cintura'];
$cadera = isset($_POST['cadera']) ? $_POST['cadera'] : null;
$muñeca = isset($_POST['muñeca']) ? $_POST['muñeca'] : null;
$email = $_POST['email'];
$actividad = $_POST['actividad'];
$objetivo = $_POST['objetivo'];
$enfermedad = $_POST['enfermedad'];
$alimentacion = $_POST['alimentacion'];
$quiero_perder = $_POST['quiero_perder'];


$tablaCadera = [
    75 => 32.75,
    76 => 33.39,
    77 => 33.83,
    78 => 34.44,
    79 => 34.98,
    80 => 35.70,
    81 => 36.14,
    82 => 36.59,
    83 => 37.30,
    84 => 37.75,
    85 => 38.20,
    86 => 38.90,
    87 => 39.35,
    88 => 40.05,
    89 => 40.45,
    90 => 41.00,
    91 => 41.75,
    92 => 42.10,
    93 => 42.65,
    94 => 43.20,
    95 => 43.75,
    96 => 44.30,
    97 => 44.85,
    98 => 45.40,
    99 => 46.02,
    100 => 46.65,
    101 => 47.19,
    102 => 47.66,
    103 => 48.21,
    104 => 48.77,
    105 => 49.24,
    106 => 49.86,
    107 => 50.39,
    108 => 50.90,
    109 => 51.51,
    110 => 52.00,
    111 => 52.67,
    112 => 53.14,
    113 => 53.71,
    114 => 54.26,
    115 => 54.81,
    116 => 55.38,
    117 => 55.91,
    118 => 56.46,
    119 => 57.00,
    120 => 57.56,
    121 => 58.14,
    122 => 58.66,
    123 => 59.18,
    124 => 59.72,
    125 => 60.36,
    126 => 60.87,
    127 => 61.42,
    128 => 61.96,
    129 => 62.50,
    130 => 63.06,
    131 => 63.61,
    132 => 64.16,
    133 => 64.70,
    134 => 65.26,
    135 => 65.81,
    136 => 66.36,
    137 => 66.91,
    138 => 67.46,
    139 => 68.01,
];

$tablaAbdomen = [
    50 => 14.00,
    51 => 14.27,
    52 => 14.55,
    53 => 14.83,
    54 => 15.11,
    55 => 15.39,
    56 => 15.67,
    57 => 15.95,
    58 => 16.23,
    59 => 16.51,
    60 => 16.79,
    61 => 17.07,
    62 => 17.35,
    63 => 17.64,
    64 => 17.92,
    65 => 18.19,
    66 => 18.48,
    67 => 18.75,
    68 => 19.03,
    69 => 19.31,
    70 => 19.59,
    71 => 19.87,
    72 => 20.15,
    73 => 20.43,
    74 => 20.71,
    75 => 20.99,
    76 => 21.27,
    77 => 21.55,
    78 => 21.83,
    79 => 22.11,
    80 => 22.39,
    81 => 22.67,
    82 => 22.95,
    83 => 23.23,
    84 => 23.51,
    85 => 23.79,
    86 => 24.07,
    87 => 24.35,
    88 => 24.63,
    89 => 24.91,
];

$tablaAltura = [
    140 => 33.59,
    141 => 33.83,
    142 => 34.07,
    143 => 34.31,
    144 => 34.55,
    145 => 34.79,
    146 => 35.03,
    147 => 35.27,
    148 => 35.51,
    149 => 35.75,
    150 => 35.99,
    151 => 36.23,
    152 => 36.47,
    153 => 36.71,
    154 => 36.95,
    155 => 37.19,
    156 => 37.43,
    157 => 37.67,
    158 => 37.91,
    159 => 38.15,
    160 => 38.39,
    161 => 38.63,
    162 => 38.87,
    163 => 39.11,
    164 => 39.35,
    165 => 39.59,
    166 => 39.83,
    167 => 40.07,
    168 => 40.31,
    169 => 40.55,
    170 => 40.79,
    171 => 41.03,
    172 => 41.27,
    173 => 41.51,
    174 => 41.75,
    175 => 41.99,
    176 => 42.23,
    177 => 42.47,
    178 => 42.72,
    179 => 42.96,
];

$tablaHombres = [
    55 => [56 => 4, 57 => 6, 58 => 8, 59 => 10, 60 => 11, 61 => 12, 62 => 14],
    57 => [56 => 4, 57 => 6, 58 => 7, 59 => 9, 60 => 10, 61 => 11, 62 => 13],
    59 => [56 => 3, 57 => 5, 58 => 7, 59 => 9, 60 => 10, 61 => 11, 62 => 12],
    61 => [56 => 3, 57 => 5, 58 => 7, 59 => 8, 60 => 9, 61 => 10, 62 => 12],
    63 => [56 => 3, 57 => 5, 58 => 6, 59 => 8, 60 => 9, 61 => 10, 62 => 11],
    65 => [56 => 4, 57 => 6, 58 => 7, 59 => 8, 60 => 9, 61 => 11, 62 => 12],
];

// Función para buscar constante en una tabla
function buscarConstante($valor, $tabla)
{
    $keys = array_keys($tabla); // Obtener todas las claves de la tabla
    sort($keys); // Ordenar las claves en orden ascendente
    for ($i = 0; $i < count($keys); $i++) { // Recorrer cada clave
        if ($valor <= $keys[$i]) { // Si el valor es menor o igual a la clave actual
            return $tabla[$keys[$i]]; // Devolver la constante correspondiente
        }
    }
    return end($tabla); // Si no hay coincidencia, devolver el último valor de la tabla
}

// Función para buscar constante para hombres
function buscarConstanteHombres($peso, $diferencia, $tablaHombres)
{
    $pesos = array_keys($tablaHombres); // Obtener todas las claves (pesos) de la tabla
    sort($pesos); // Ordenar los pesos en orden ascendente
    for ($i = 0; $i < count($pesos); $i++) { // Recorrer cada peso
        if ($peso <= $pesos[$i]) { // Si el peso ingresado es menor o igual al peso actual
            $diferencias = array_keys($tablaHombres[$pesos[$i]]); // Obtener las diferencias para ese peso
            sort($diferencias); // Ordenar las diferencias
            for ($j = 0; $j < count($diferencias); $j++) { // Recorrer las diferencias
                if ($diferencia <= $diferencias[$j]) { // Si la diferencia es menor o igual
                    return $tablaHombres[$pesos[$i]][$diferencias[$j]]; // Retornar la constante encontrada
                }
            }
            return end($tablaHombres[$pesos[$i]]); // Si no hay coincidencia, devolver el último valor
        }
    }
    return 0; // Si no hay coincidencia en toda la tabla, devolver 0
}

// Función para calcular el porcentaje de grasa corporal
function calcularPorcentajeGrasa($sexo, $cadera, $cintura, $altura, $peso, $muñeca, $tablaCadera, $tablaAbdomen, $tablaAltura, $tablaHombres)
{
    if ($sexo === 'Mujer' || $sexo === 'Mujer embarazada') { // Cálculo para mujeres
        $constanteA = buscarConstante($cadera, $tablaCadera);
        $constanteB = buscarConstante($cintura, $tablaAbdomen);
        $constanteC = buscarConstante($altura, $tablaAltura);
        return $constanteA + $constanteB - $constanteC; // Fórmula para mujeres
    } elseif ($sexo === 'Hombre') { // Cálculo para hombres
        $diferencia = $cintura - $muñeca; // Diferencia entre cintura y muñeca
        return buscarConstanteHombres($peso, $diferencia, $tablaHombres); // Usar tabla de hombres
    }
    return 0; // Si el sexo no es válido, devolver 0
}

// Función para calcular la masa magra
function calcularMasaMagra($peso, $porcentajeGrasa)
{
    $pesoGrasa = $peso * ($porcentajeGrasa / 100); // Peso de la grasa corporal
    return $peso - $pesoGrasa; // Masa magra = peso total - peso de la grasa
}

// Función para calcular el IMC
function calcularIMC($peso, $altura)
{
    $altura_m = $altura / 100; // Convertir altura a metros
    return $peso / ($altura_m * $altura_m); // Fórmula del IMC: peso / altura^2
}

// Función para calcular bloques
function calcularBloques($masaMagra, $sexo, $actividad)
{
    $iaf = 0; // Índice de actividad física inicializado en 0
    if ($actividad === "Movilidad casi nula") $iaf = 0;
    elseif ($actividad === "Movilidad muy reducida") $iaf = 1;
    elseif ($actividad === "Normal") $iaf = 2;
    elseif ($actividad === "Activa") $iaf = 3;
    elseif ($actividad === "Muy activa") $iaf = 4;
    elseif ($actividad === "Deportista") $iaf = 5;

    $bloques = floor($masaMagra / 10) + $iaf; // Bloques = masa magra / 10 + índice de actividad física

    if ($sexo === 'Mujer' && $bloques < 11) $bloques = 11; // Mínimo 11 bloques para mujeres
    elseif ($sexo === 'Hombre' && $bloques < 14) $bloques = 14; // Mínimo 14 bloques para hombres

    if ($sexo === 'Mujer embarazada') $bloques += 3; // Sumar 3 bloques adicionales para mujeres embarazadas

    return min($bloques, 23); // Máximo de 23 bloques permitidos
}

// Realizar cálculos
$porcentajeGrasa = calcularPorcentajeGrasa($sexo, $cadera, $cintura, $altura, $peso, $muñeca, $tablaCadera, $tablaAbdomen, $tablaAltura, $tablaHombres);
$masaMagra = calcularMasaMagra($peso, $porcentajeGrasa);
$imc = calcularIMC($peso, $altura);
$bloques = calcularBloques($masaMagra, $sexo, $actividad);

// Generar el informe HTML
$informe = "
<h2>Resumen de tus datos</h2>
<p>Email: $email</p>
<p>Sexo: $sexo</p>
<p>Peso total: $peso kg</p>
<p>Altura: $altura cm</p>
<p>Cintura: $cintura cm</p>
<p>Actividad física: $actividad</p>
<p>Objetivo: $objetivo</p>
<p>Porcentaje de grasa corporal: " . number_format($porcentajeGrasa, 2) . "%</p>
<p>Peso de grasa corporal: " . number_format($peso * ($porcentajeGrasa / 100), 2) . " kg</p>
<p>Masa magra: " . number_format($masaMagra, 2) . " kg</p>
<p>IMC: " . number_format($imc, 2) . "</p>
<p>Número de bloques: $bloques</p>
";

// Mostrar el informe en pantalla
echo $informe;


?>
