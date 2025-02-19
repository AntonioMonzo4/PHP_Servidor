<?php
//DATOS DE LA BBDD
$host = "localhost";
$usuario = "juandeherrera";
$contrasena = "IESjdh2025*";
$nombreBD = "leads";

// CREAMOS CONEXIÓN
$conexion = mysqli_connect($host, $usuario, $contrasena, $nombreBD);

// COMPROBAMOS
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// PARA ADMITIR TILDES
mysqli_set_charset($conexion, "utf8");
?>
