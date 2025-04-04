<?php
include '../CONTROLADOR/conexion.php';

$conexion = mysqli_connect($host, $usuario, $contraseña, $bbdd);

if (!$conexion) {
    die("Error de conexión a la base de datos" . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = (isset($_POST['email'])) && (!empty($_POST['email'])) ? $_POST['email'] : '';
    $tlfn = (isset($_POST['tlfn'])) && (!empty($_POST['tlfn'])) ? $_POST['tlfn'] : '';

}
echo $email;
$sql_consultar = "SELECT * FROM registroasistentes where email = '$email'";
$resultado_consultar = mysqli_query($conexion, $sql_consultar);


if (!$resultado_consultar) {
    die("Error" . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado_consultar) > 0) {
    $sql_eliminar = "DELETE FROM registroasistentes where email = '$email'";
    $resultado_eliminar = mysqli_query($conexion, $sql_eliminar);

    if (!$resultado_eliminar) {
        die("Error" . mysqli_error($conexion));
    } else {
        echo "<p>SE HA BORRADO CON EXITO</p>";
    }


}else{
    echo "<p> Este individuo no estaba en la base de datos</p>";

}