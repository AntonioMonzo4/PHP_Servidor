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

$sql_consultar = "SELECT * FROM productos";
$resultado_consultar = mysqli_query($conexion, $sql_consultar);

if (!$resultado_consultar) {
    die("Error" . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado_consultar) > 0) {
    while ($row = mysqli_fetch_assoc($resultado_consultar)){
        $texto="<ul>";
        $texto.= "<li>Nombre: ". $row['nombre']."</li>";
        $texto.= "<li>Descripcion: ". $row['descripcion']."</li>";
        $texto.= "<li>Precio: ". $row['precio']."</li>";
        $texto.= "<li>Talla: ". $row['talla']."</li>";
        $texto.= "<li>Categoria: ". $row['categoria']."</li>";
        $texto.= "<li>Cantidad Stock: ". $row['cantidad_stock']."</li>";
        $texto.="</ul>";
        echo $texto;
    }  
}else{
    echo "Estamos pobres,no hay productos";
}
 mysqli_close($conexion);
 ?>
