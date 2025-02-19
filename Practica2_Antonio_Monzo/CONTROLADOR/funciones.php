<?php
// Recibir datos del formulario

include("../MODELO/tablas.php");
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
