<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Eliminar productos</title>
</head>

<body>
    <h1>ELIMINAR PRODUCTOS A LA BASE DE DATOS</h1>
    <form action="../MODELO/eliminarProducto.php" method="POST">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <input type="submit" name="Enviar" value="ENVIAR">
        </p>
    </form>
</body>

</html>