<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include("../MODELO/tablas.php");
    echo '<link rel="stylesheet" href="../VISTA/styles.css">';


    $peso = isset($_POST['peso']) ? $_POST['peso'] : "No proporcionado/obtenido";
    $altura = isset($_POST['altura']) ? $_POST['altura'] : "No proporcionado/obtenido";
    $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : "No proporcionado/obtenido";
    $email = isset($_POST['email']) ? $_POST['email'] : "No proporcionado/obtenido";
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "No proporcionado/obtenido";
    $actividad = isset($_POST['actividad']) ? $_POST['actividad'] : "No proporcionado/obtenido";
    $cintura = isset($_POST['cintura']) ? $_POST['cintura'] : "No proporcionado/obtenido";
    $cadera = isset($_POST['cadera']) ? $_POST['cadera'] : "No proporcionado/obtenido";
    $muñeca = isset($_POST['muñeca']) ? $_POST['muñeca'] : "No proporcionado/obtenido";
    $objetivo = isset($_POST['objetivo']) ? $_POST['objetivo'] : "No proporcionado/obtenido";
    $enfermedad = isset($_POST['enfermedad']) ? $_POST['enfermedad'] : "No proporcionado/obtenido";
    $alimentacion = isset($_POST['alimentacion']) ? $_POST['alimentacion'] : "No proporcionado/obtenido";
    $quiero_perder = isset($_POST['quiero_perder']) ? $_POST['quiero_perder'] : "No proporcionado/obtenido";

    if ($peso === "No proporcionado/obtenido" || $peso < 40 || $peso > 300) {
        echo "<p>Error: Peso no proporcionado o fuera de rango (40-300 kg).</p>";
    }
    if ($altura === "No proporcionado/obtenido" || $altura < 120 || $altura > 235) {
        echo "<p>Error: Altura no proporcionada o fuera de rango (120-235 cm).</p>";
    }
    if ($fecha_nacimiento === "No proporcionado/obtenido") {
        echo "<p>Error: Fecha de nacimiento no proporcionada.</p>";
    }
    if ($email === "No proporcionado/obtenido" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Error: Correo electrónico no proporcionado o inválido.</p>";
    }
    if ($sexo === "Mujer" && ($cadera === "No proporcionado/obtenido" || $cadera <= 0)) {
        echo "<p>Error: Medida de cadera no proporcionada o inválida para mujeres.</p>";
    }
    if ($sexo === "Hombre" && ($muñeca === "No proporcionado/obtenido" || $muñeca <= 0)) {
        echo "<p>Error: Medida de muñeca no proporcionada o inválida para hombres.</p>";
    }
    if ($cintura === "No proporcionado/obtenido" || $cintura <= 0) {
        echo "<p>Error: Medida de cintura no proporcionada o inválida.</p>";
    }

    function buscarConstante($valor, $tabla)
    {
        $keys = array_keys($tabla);
        sort($keys);
        for ($i = 0; $i < count($keys); $i++) {
            if ($valor <= $keys[$i]) {
                return $tabla[$keys[$i]];
            }
        }
        return end($tabla);
    }

    function buscarConstanteHombres($peso, $diferencia, $tablaHombres)
    {
        $pesos = array_keys($tablaHombres);
        sort($pesos);
        for ($i = 0; $i < count($pesos); $i++) {
            if ($peso <= $pesos[$i]) {
                $diferencias = array_keys($tablaHombres[$pesos[$i]]);
                sort($diferencias);
                for ($j = 0; $j < count($diferencias); $j++) {
                    if ($diferencia <= $diferencias[$j]) {
                        return $tablaHombres[$pesos[$i]][$diferencias[$j]];
                    }
                }
                return end($tablaHombres[$pesos[$i]]);
            }
        }
        return 0;
    }

    function calcularPorcentajeGrasa($sexo, $cadera, $cintura, $altura, $peso, $muñeca, $tablaCadera, $tablaAbdomen, $tablaAltura, $tablaHombres)
    {
        if ($sexo === 'Mujer' || $sexo === 'Mujer embarazada') {
            $constanteA = buscarConstante($cadera, $tablaCadera);
            $constanteB = buscarConstante($cintura, $tablaAbdomen);
            $constanteC = buscarConstante($altura, $tablaAltura);
            return $constanteA + $constanteB - $constanteC;
        } elseif ($sexo === 'Hombre') {
            $diferencia = $cintura - $muñeca;
            return buscarConstanteHombres($peso, $diferencia, $tablaHombres);
        }
        return 0;
    }

    function calcularMasaMagra($peso, $porcentajeGrasa)
    {
        $pesoGrasa = $peso * ($porcentajeGrasa / 100);
        return $peso - $pesoGrasa;
    }

    function calcularIMC($peso, $altura)
    {
        $altura_m = $altura / 100;
        return $peso / ($altura_m * $altura_m);
    }

    function calcularBloques($masaMagra, $sexo, $actividad)
    {
        $iaf = 0;

        if ($actividad === "Movilidad casi nula") $iaf = 0;
        elseif ($actividad === "Movilidad muy reducida") $iaf = 1;
        elseif ($actividad === "Normal") $iaf = 2;
        elseif ($actividad === "Activa") $iaf = 3;
        elseif ($actividad === "Muy activa") $iaf = 4;
        elseif ($actividad === "Deportista") $iaf = 5;

        $bloques = floor(($masaMagra * $iaf)/7);

        if ($sexo === 'Mujer' && $bloques < 11) $bloques = 11;
        elseif ($sexo === 'Hombre' && $bloques < 14) $bloques = 14;

        if ($sexo === 'Mujer embarazada' && $bloques < 14) $bloques =14;
        elseif($sexo === 'Mujer embarazada') $bloques += 3;

        return min($bloques, 23);
    }


    function obtenerRecomendaciones($objetivo)
    {
        switch ($objetivo) {
            case "Perder peso":
                return "Puedes perder el peso que deseas en un plazo saludable dependiendo de tu compromiso. Cambiar tus hábitos te ayudará a mantener tu progreso.";
            case "Mejorar mi salud":
                return "Mantén una dieta balanceada y realiza actividad física moderada. Con constancia, verás grandes mejoras en tu salud.";
            case "Ganar peso/músculo":
                return "Una dieta rica en proteínas y ejercicios de fuerza son clave para ganar masa muscular de forma saludable.";
            default:
                return "Define tus objetivos claros para obtener mejores resultados.";
        }
    }

    function generarResumenDatos($email, $sexo, $peso, $altura, $cintura, $actividad, $objetivo, $porcentajeGrasa, $masaMagra, $imc, $bloques)
    {
        return "
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
    }

    function interpretarIMC($imc)
    {
        if ($imc < 18) {
            return "Tu peso es inferior al saludable. Te recomendamos seguir nuestro programa para ganar masa muscular y mejorar tu salud.";
        } elseif ($imc < 20) {
            return "Tu peso se encuentra en la banda más baja del peso saludable. Te recomendamos seguir nuestro programa para ganar masa muscular y mejorar tu salud.";
        } elseif ($imc < 23) {
            return "Enhorabuena. Tu peso es el óptimo. Te recomendamos seguir nuestro programa para ganar masa muscular, perfeccionar algunas zonas de tu cuerpo y mejorar tu salud.";
        } elseif ($imc < 25) {
            return "Tu peso se encuentra en la banda alta del peso normal. Te recomendamos seguir nuestro programa para reducir tu peso, ganar masa muscular, perfeccionar algunas zonas de tu cuerpo y mejorar tu salud.";
        } elseif ($imc < 28) {
            return "Tienes exceso de peso. Reducir tu peso es beneficioso para tu salud y te permitirá encontrarte más ágil y conseguir un físico más juvenil.";
        } elseif ($imc < 30) {
            return "Tienes exceso de peso. Reducir tu peso es necesario para tu salud y te permitirá encontrarte más ágil y mejorar tu físico. Es el momento de tomar medidas.";
        } else {
            return "Tienes peso muy superior a lo aconsejable. Reducir tu peso es necesario para tu salud y te permitirá encontrarte más ágil y mejorar tu físico. Es posible que hayas estado ganando peso de forma continuada últimamente. Es el momento de tomar medidas.";
        }
    }

    function mostrarInforme($email, $sexo, $peso, $altura, $cintura, $actividad, $objetivo, $porcentajeGrasa, $masaMagra, $imc, $bloques)
    {
        $resumen = generarResumenDatos($email, $sexo, $peso, $altura, $cintura, $actividad, $objetivo, $porcentajeGrasa, $masaMagra, $imc, $bloques);
        $interpretacion = interpretarIMC($imc);
        $recomendaciones = obtenerRecomendaciones($objetivo);

        echo $resumen;

        echo "<h2>Interpretación del IMC</h2>";
        echo "<p>$interpretacion</p>";

        echo "<h2>Recomendaciones generales</h2>";
        echo "<p>$recomendaciones</p>";

        echo "<h2>Motivación adicional</h2>";
        echo "<p>Toma el control de tu salud ahora. Cada paso que des hacia un estilo de vida saludable marcará la diferencia.</p>";
    }

    $porcentajeGrasa = calcularPorcentajeGrasa($sexo, $cadera, $cintura, $altura, $peso, $muñeca, $tablaCadera, $tablaAbdomen, $tablaAltura, $tablaHombres);
    $masaMagra = calcularMasaMagra($peso, $porcentajeGrasa);
    $imc = calcularIMC($peso, $altura);
    $bloques = calcularBloques($masaMagra, $sexo, $actividad);

    mostrarInforme($email, $sexo, $peso, $altura, $cintura, $actividad, $objetivo, $porcentajeGrasa, $masaMagra, $imc, $bloques);
}
