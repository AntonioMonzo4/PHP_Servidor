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
    $row = mysqli_fetch_assoc($resultado_consultar);
    $cantidad_stock1 = $row['cantidad_stock'];
    $nueva_cantidad=$cantidad_stock1+$cantidad_stock;
    $sql_actualizar = "UPDATE productos SET cantidad_stock='$nueva_cantidad' where nombre = '$nombre'";
    $resultado_actualizar = mysqli_query($conexion, $sql_actualizar);

    if (!$resultado_actualizar) {
        die("Error" . mysqli_error($conexion));
    } else {
        echo "La modificacion se ha realizado con éxito";
    }

    
} else {
    $sql_insertar_producto = "INSERT INTO productos (nombre,descripcion,precio,talla,categoria,cantidad_stock) 
    values ('$nombre','$descripcion','$precio','$talla','$categoria','$cantidad_stock')";
    
    $resultado_insertar = mysqli_query($conexion, $sql_insertar_producto);

    if (!$resultado_insertar) {
        die("Error" . mysqli_error($conexion));
    } else {
        echo "Se ha agregado con existo";
    }
}
 mysqli_close($conexion);
 ?>
