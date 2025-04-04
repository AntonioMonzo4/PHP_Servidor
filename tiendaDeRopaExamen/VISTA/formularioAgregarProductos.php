<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario agregar productos</title>
</head>

<body>
    <h1>AGREGAR PRODUCTOS A LA BASE DE DATOS</h1>
    <form action="../MODELO/agregarProducto.php" method="POST">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion">
        </p>

        <p>
            <label for="precio">precio:</label>
            <input type="number" name="precio" id="precio" min="1" max="1000">
        </p>

        <p>
             <label for="talla">Talla:</label>
            <select name="talla" id="talla">
                <option value=" ">Selecciona una opción</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>
        </p>

        <p>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria">
                <option value=" ">Selecciona una opción</option>
                <option value="Camisas">Camisas</option>
                <option value="Pantalones">Pantalones</option>
                <option value="Zapatos">Zapatos</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Abrigos">Abrigos</option>
            </select>
        </p>

        <p>
            <label for="cantidad_stock">Cantidad stock:</label>
            <input type="number" name="cantidad_stock" id="cantidad_stock">
        <p>

        <p>
            <input type="submit" name="Enviar" value="ENVIAR">
        </p>
    </form>
</body>

</html>