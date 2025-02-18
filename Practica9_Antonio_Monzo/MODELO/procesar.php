<?php

//Viendo tutoriales y apuntes decia que esta era la opción mejor/optima para envitar que se inculya varias veces 

require_once '../MODELO/ususario.php';
require_once '../MODELO/imc.php';
require_once '../MODELO/informe.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $nombre= isset($_POST['nombre'])? $_POST['peso'] : "No proporcionado/obtenido";
    $peso = isset($_POST['peso']) ? $_POST['peso'] : "No proporcionado/obtenido";
    $altura = isset($_POST['altura']) ? $_POST['altura'] : "No proporcionado/obtenido";
    $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : "No proporcionado/obtenido";
    $email = isset($_POST['email']) ? $_POST['email'] : "No proporcionado/obtenido";
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "No proporcionado/obtenido";
    $actividad = isset($_POST['actividad']) ? $_POST['actividad'] : "No proporcionado/obtenido";
    $objetivo = isset($_POST['objetivo']) ? $_POST['objetivo'] : "No proporcionado/obtenido";
  

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
   

    //genera los datos
    $usuario = new Usuario($_POST['nombre'], $_POST['email'], $_POST['peso'], $_POST['altura'], $_POST['fecha_nacimiento'], $_POST['sexo'], $_POST['actividad'], $_POST['objetivo']);
    $informe = new Informe($usuario);


    //invoca al informe 
    echo $informe->generarInforme();

} else {
    echo "<p>Error: No se recibieron datos.</p>";
}
?>
