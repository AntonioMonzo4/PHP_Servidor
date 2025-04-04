<?
include '../CONTROLADOR/conexion.php';

$conexion = mysqli_connect($host, $usuario, $contraseña, $bbdd);
if (!$conexion) {
    die("Error de conexión a la base de datos" . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = (isset($_POST['email'])) && (!empty($_POST['email'])) ? $_POST['email'] : '';
   
    $confi = (isset($_POST['confi'])) && (!empty($_POST['confi'])) ? $_POST['confi'] : '';
    if($email!=$confi){
        echo "ERROR LOS EMAILS SON DISTINTOS";
    }
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
$sql_consultar = "SELECT * FROM registrosasistentes where email = '$email'";
$resultado_consultar = mysqli_query($conexion, $sql_consultar);

if (!$resultado_consultar) {
    die("Error" . mysqli_error($conexion));
}
if (mysqli_num_rows($resultado_consultar)>0){
    echo "Este usuario ya estaba registrado";
  
} else {
    $sql_nuevo = "INSERT INTO registroasistentes(email,nombre,apellido1,apellido2,centrotrabajo,telefono,direccion,codigopostal,ciudad,provincia,fecha,hora)  values ('$email','$nombre','$ape1','$ape2','$centro','$tlfn','$direccion','$cp','$ciudad','$cprovincia',date('Y-m-d'),date('h:i:s')";
    
    $resultado_insertar = mysqli_query($conexion, $sql_nuevo);

    if (!$resultado_insertar) {
        die("Error" . mysqli_error($conexion));
    } else {
        echo "Se ha agregado con existo";
    }
}
 mysqli_close($conexion);
