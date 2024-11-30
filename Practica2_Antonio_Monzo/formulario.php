<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$actividad = $_POST['actividad'];
$objetivo = $_POST['objetivo'];


$altura_m = $altura / 100;

$imc = $peso / ($altura_m * $altura_m);
$imc = round($imc, 1);


if ($imc < 18) {
    $interpretacion = "Tu peso es inferior al saludable. Te recomendamos seguir nuestro programa para ganar masa muscular y mejorar tu salud.";
} elseif ($imc < 20) {
    $interpretacion = "Tu peso se encuentra en la banda más baja del peso saludable. Te recomendamos seguir nuestro programa para ganar masa muscular y mejorar tu salud.";
} elseif ($imc < 23) {
    $interpretacion = "Enhorabuena. Tu peso es el óptimo. Te recomendamos seguir nuestro programa para ganar masa muscular, perfeccionar algunas zonas de tu cuerpo y mejorar tu salud.";
} elseif ($imc < 25) {
    $interpretacion = "Tu peso se encuentra en la banda alta del peso normal. Te recomendamos seguir nuestro programa para reducir tu peso, ganar masa muscular, perfeccionar algunas zonas de tu cuerpo y mejorar tu salud.";
} elseif ($imc < 28) {
    $interpretacion = "Tienes exceso de peso. Reducir tu peso es beneficioso para tu salud y te permitirá encontrarte más ágil y conseguir un físico más juvenil.";
} elseif ($imc < 30) {
    $interpretacion = "Tienes exceso de peso. Reducir tu peso es necesario para tu salud y te permitirá encontrarte más ágil y mejorar tu físico. Es el momento de tomar medidas.";
} else {
    $interpretacion = "Tienes peso muy superior a lo aconsejable. Reducir tu peso es necesario para tu salud y te permitirá encontrarte más ágil y mejorar tu físico. Es posible que hayas estado ganando peso de forma continuada últimamente. Es el momento de tomar medidas.";
}


switch ($objetivo) {
    case "Perder peso":
        $recomendaciones = "Puedes perder el peso que deseas en un plazo saludable dependiendo de tu compromiso. Cambiar tus hábitos te ayudará a mantener tu progreso.";
        break;
    case "Mejorar mi salud":
        $recomendaciones = "Mantén una dieta balanceada y realiza actividad física moderada. Con constancia, verás grandes mejoras en tu salud.";
        break;
    case "Ganar peso/músculo":
        $recomendaciones = "Una dieta rica en proteínas y ejercicios de fuerza son clave para ganar masa muscular de forma saludable.";
        break;
    default:
        $recomendaciones = "Define tus objetivos claros para obtener mejores resultados.";
        break;
}

// Nuevos cálculos: Porcentaje de grasa y masa muscular
$masa_magra = ($sexo === 'Hombre') ? ($peso * 0.82 + 44) : ($peso * 0.73 + 47);
$masa_grasa = $peso - $masa_magra;
$porcentaje_grasa = ($masa_grasa / $peso) * 100;
$porcentaje_magra = ($masa_magra / $peso) * 100;

// Calcular bloques ajustados
$iaf = match ($actividad) {
    'Movilidad casi nula' => 0,
    'Movilidad muy reducida' => 1,
    'Normal' => 2,
    'Activa (1,5 a 2,5 h/sem.)' => 3,
    'Muy activa (>2,5 h/sem.)' => 4,
    'Deportista' => 5,
};
$bloques = floor($masa_magra / 10) + $iaf;
if ($sexo === 'Hombre' && $bloques < 14) $bloques = 14;
if (($sexo === 'Mujer' || $sexo === 'Mujer embarazada') && $bloques < 11) $bloques = 11;
if ($sexo === 'Mujer embarazada') $bloques += 3;
if ($bloques > 23) $bloques = 23;

// Generar informe extendido
$informe = "
    Resumen de tus datos:
    Sexo: $sexo
    Altura: {$altura} cm
    Peso: {$peso} kg
    IMC: $imc
    Interpretación del IMC: $interpretacion

    Porcentaje de grasa corporal: " . round($porcentaje_grasa, 1) . "%
    Porcentaje de masa magra: " . round($porcentaje_magra, 1) . "%
    Peso de masa grasa: " . round($masa_grasa, 1) . " kg
    Peso de masa magra: " . round($masa_magra, 1) . " kg

    Bloques recomendados: $bloques
";

// Enviar por email (opcional)
$headers = "From: info@developersinpanzatransmiteconfianza.com\r\n";
mail($email, "Informe de Salud - Developer sin Panza", $informe, $headers);

// Mostrar en pantalla
echo nl2br($informe);
