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


echo "<h1>Informe de Salud</h1>";
echo "<h2>Resumen de datos</h2>";
echo "<p><strong>Sexo:</strong> $sexo</p>";
echo "<p><strong>Altura:</strong> $altura cm</p>";
echo "<p><strong>Peso:</strong> $peso kg</p>";

echo "<h2>Índice de Masa Corporal (IMC)</h2>";
echo "<p>Tu índice de masa corporal (IMC) es: $imc</p>";

echo "<h2>Interpretación del IMC</h2>";
echo "<p>$interpretacion</p>";

echo "<h2>Recomendaciones generales</h2>";
echo "<p>$recomendaciones</p>";

echo "<h2>Motivación adicional</h2>";
echo "<p>Toma el control de tu salud ahora. Cada paso que des hacia un estilo de vida saludable marcará la diferencia.</p>";
?>
