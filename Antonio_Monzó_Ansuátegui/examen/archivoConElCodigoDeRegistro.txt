<?php

include '../CONTROLADOR/conexion.php';

$conexion = mysqli_connect($host, $usuario, $contraseña, $bbdd);

if (!$conexion) {
    die("Error de conexión a la base de datos" . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $nombre = (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) ? $_POST['nombre'] : '';
    $ape1 = (isset($_POST['ape1'])) && (!empty($_POST['ape1'])) ? $_POST['ape1'] : '';
    $ape2 = (isset($_POST['ape2'])) && (!empty($_POST['ape2'])) ? $_POST['ape2'] : '';
    $centro = (isset($_POST['centro'])) && (!empty($_POST['centro'])) ? $_POST['centro'] : '';
    $tlfn = (isset($_POST['tlfn'])) && (!empty($_POST['tlfn'])) ? $_POST['tlfn'] : '';
    $direccion = (isset($_POST['direccion'])) && (!empty($_POST['direccion'])) ? $_POST['direccion'] : '';
    $cp = (isset($_POST['cp'])) && (!empty($_POST['cp'])) ? $_POST['cp'] : '';
    $ciudad = (isset($_POST['ciudad'])) && (!empty($_POST['ciudad'])) ? $_POST['ciudad'] : '';
    $provincia = (isset($_POST['provincia'])) && (!empty($_POST['provincia'])) ? $_POST['provincia'] : '';

}

$sql_consultar = "SELECT * FROM registroasistentes where email = '$email'";
$resultado_consultar = mysqli_query($conexion, $sql_consultar);

if (!$resultado_consultar) {
    die("Error" . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado_consultar) > 0) {
    $row = mysqli_fetch_assoc($resultado_consultar);
    
    $sql_actualizar = "UPDATE registroasistentes SET nombre='$nombre' ,apellido1 ='$ape1' ,apellido2='$ape2',centrotrabajo='$centro',telefono='$tlfn',direccion='$direccion',codigopostal='$cp',ciudad='$ciudad',provincia='$provincia' where email = '$email'";
    $resultado_actualizar = mysqli_query($conexion, $sql_actualizar);

    if ($resultado_actualizar) {
        echo"MODIFICACION EXITOSA";
    }
}

