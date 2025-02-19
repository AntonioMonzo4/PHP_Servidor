<?php
require_once '../CONTROLADOR/conexion.php';
require_once 'usuario.php';

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
   



    $usuario = new Usuario($conexion);
    $resultado = $usuario->registrarUsuario($_POST['nombre'], $_POST['email'], $_POST['peso'], $_POST['altura'], $_POST['fecha_nacimiento'], $_POST['sexo'], $_POST['actividad'], $_POST['objetivo']);
    
    if ($resultado) {
        echo "<p>Registro exitoso.</p>";
    } else {
        echo "<p>Error en el registro.</p>";
    }
    
    echo '<button onclick="window.location.href=\'../VISTA/index.html\'">Volver al formulario</button>';
}
?>
