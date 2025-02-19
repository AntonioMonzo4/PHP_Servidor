<?php
require_once '../CONTROLADOR/conexion.php';
//OBTIENE DATOS DE CORREO Y FECHA DE NACIMIENTO Y ELIMINA AL USUARIO 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    
    $sql = "DELETE FROM usuarios WHERE email = ? AND fecha_nacimiento = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $email, $fechaNacimiento);
    
    if ($stmt->execute()) {
        echo "<p>Usuario eliminado correctamente.</p>";
    } else {
        echo "<p>Error al eliminar usuario.</p>";
    }
    
    echo '<a href="../VISTA/index.php">Volver</a>';
    
    $stmt->close();
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja de Usuario</title>
    <link rel="stylesheet" href="styles.css">


</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #ffebee;
    color: #b71c1c;
    text-align: center;
    padding: 20px;
}

h1 {
    color: #d32f2f;
}

form {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: auto;
    margin-bottom: 50px;
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input {
    width: 85%;
    padding: 8px;
    margin: 5px 0 15px;
    border: 1px solid #e57373;
    border-radius: 5px;
}

button {
    background-color: #d32f2f;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #b71c1c;
}


</style>
<body>
    <h1>Borrar Usuario</h1>
    <form method="POST">
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Fecha de Nacimiento: <input type="date" name="fecha_nacimiento" required></label><br>
        <button type="submit">Eliminar Usuario</button>
    </form>
    <a href="../VISTA/index.php">Volver</a>
</body>
</html>
