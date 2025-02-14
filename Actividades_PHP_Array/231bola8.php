<?php
// Definir un array con posibles respuestas
$respuestas = array(
    "Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no", 
    "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña"
);

if (isset($_POST['pregunta'])) {
    $pregunta = $_POST['pregunta']; 

    $respuesta = $respuestas[array_rand($respuestas)];

    echo "<h1>Pregunta:</h1>";
    echo "<p><strong>$pregunta</strong></p>";
    echo "<h2>Respuesta de la Bola 8 Mágica:</h2>";
    echo "<p><strong>$respuesta</strong></p>";
} else {
    echo "<p>No se recibió ninguna pregunta.</p>";
}
?>
