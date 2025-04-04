<?php
require_once "../CONTROLADOR/conexion.php";

$conexion = mysqli_connect($host, $usuario, $contraseña, $bbdd);

if (!$conexion) {
    die("Error de conexión a la base de datos" . mysqli_connect_error());
}

//validar los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) ? $_POST['nombre'] : '';
    $descripcion = (isset($_POST['descripcion'])) && (!empty($_POST['descripcion'])) ? $_POST['descripcion'] : '';
    $precio = (isset($_POST['precio'])) && (!empty($_POST['precio'])) ? $_POST['precio'] : '';
    $talla = (isset($_POST['talla'])) && (!empty($_POST['talla'])) ? $_POST['talla'] : '';
    $categoria = (isset($_POST['categoria'])) && (!empty($_POST['categoria'])) ? $_POST['categoria'] : '';
    $cantidad_stock = (isset($_POST['cantidad_stock'])) && (!empty($_POST['cantidad_stock'])) ? $_POST['cantidad_stock'] : '';
}

$sql_consultar = "SELECT * FROM productos where nombre = '$nombre'";
$resultado_consultar = mysqli_query($conexion, $sql_consultar);

if (!$resultado_consultar) {
    die("Error" . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado_consultar) > 0) {
    $sql_eliminar = "DELETE FROM productos where nombre = '$nombre'";
    $resultado_eliminar = mysqli_query($conexion, $sql_eliminar);

    if (!$resultado_eliminar) {
        die("Error" . mysqli_error($conexion));
    } else {
        echo "SE HA BORRADO CON EXITO";
    }
}
mysqli_close($conexion);
