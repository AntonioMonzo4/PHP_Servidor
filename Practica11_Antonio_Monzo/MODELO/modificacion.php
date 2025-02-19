<?php
require_once '../CONTROLADOR/conexion.php';
//REALIZA LA MODIFICACIÓN DEL USUARIO PRIMERO PIDIENDOLE EL CORREO 
$email = isset($_POST['email']) ? $_POST['email'] : '';
$usuarioActual = null;

//PARA VER LOS DATOS DEL CORREO INTRODUCISO 
if (!empty($email)) {
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuarioActual = $resultado->fetch_assoc();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificación de Usuario</title>
</head>
<body>
    <h1>Modificar Usuario</h1>
    <form method="POST">
        <label>Email: <input type="email" name="email" value="<?php echo $email; ?>" required></label>
        <button type="submit">Cargar Datos</button>
    </form>
    
    <?php if ($usuarioActual): ?>
    <form method="POST" action="procesarModificacion.php">
        <input type="hidden" name="email" value="<?php echo $usuarioActual['email']; ?>">
        <label>Nombre: <input type="text" name="nombre" value="<?php echo $usuarioActual['nombre'] ?? ''; ?>" required></label><br>
        <label>Peso (kg): <input type="number" step="0.1" name="peso" value="<?php echo $usuarioActual['peso'] ?? ''; ?>" required></label><br>
        <label>Altura (cm): <input type="number" step="0.1" name="altura" value="<?php echo $usuarioActual['altura'] ?? ''; ?>" required></label><br>
        <label>Fecha de Nacimiento: <input type="date" name="fechaNacimiento" value="<?php echo $usuarioActual['fecha_nacimiento'] ?? ''; ?>" required></label><br>
        <label>Sexo:
            <select name="sexo">
                <option value="Hombre" <?php echo ($usuarioActual['sexo'] ?? '') == 'Hombre' ? 'selected' : ''; ?>>Hombre</option>
                <option value="Mujer" <?php echo ($usuarioActual['sexo'] ?? '') == 'Mujer' ? 'selected' : ''; ?>>Mujer</option>
                <option value="Mujer embarazada" <?php echo ($usuarioActual['sexo'] ?? '') == 'Mujer embarazada' ? 'selected' : ''; ?>>Mujer embarazada</option>
            </select>
        </label><br>
        <label>Actividad Física:
            <select name="actividad">
                <option value="Movilidad casi nula" <?php echo ($usuarioActual['actividad'] ?? '') == 'Movilidad casi nula' ? 'selected' : ''; ?>>Movilidad casi nula</option>
                <option value="Movilidad muy reducida" <?php echo ($usuarioActual['actividad'] ?? '') == 'Movilidad muy reducida' ? 'selected' : ''; ?>>Movilidad muy reducida</option>
                <option value="Normal" <?php echo ($usuarioActual['actividad'] ?? '') == 'Normal' ? 'selected' : ''; ?>>Normal</option>
                <option value="Activa" <?php echo ($usuarioActual['actividad'] ?? '') == 'Activa' ? 'selected' : ''; ?>>Activa (1,5 a 2,5 h/sem.)</option>
                <option value="Muy activa" <?php echo ($usuarioActual['actividad'] ?? '') == 'Muy activa' ? 'selected' : ''; ?>>Muy activa (>2,5 h/sem.)</option>
                <option value="Deportista" <?php echo ($usuarioActual['actividad'] ?? '') == 'Deportista' ? 'selected' : ''; ?>>Deportista</option>
            </select>
        </label><br>
        <label>Objetivo:
            <select name="objetivo">
                <option value="Perder peso" <?php echo ($usuarioActual['objetivo'] ?? '') == 'Perder peso' ? 'selected' : ''; ?>>Perder peso</option>
                <option value="Mejorar mi salud" <?php echo ($usuarioActual['objetivo'] ?? '') == 'Mejorar mi salud' ? 'selected' : ''; ?>>Mejorar mi salud</option>
                <option value="Ganar peso/músculo" <?php echo ($usuarioActual['objetivo'] ?? '') == 'Ganar peso/músculo' ? 'selected' : ''; ?>>Ganar peso/músculo</option>
            </select>
        </label><br>
        <button type="submit">Actualizar Usuario</button>
    </form>
    <?php endif; ?>
    
    <a href="../VISTA/index.php">Volver</a>
</body>
</html>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #e3f2fd;
    color: #1565c0;
    text-align: center;
    padding: 20px;
}

h1 {
    color: #0d47a1;
}

form {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: auto;
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
    border: 1px solid #64b5f6;
    border-radius: 5px;
}

button {
    background-color: #1565c0;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0d47a1;
}

</style>

</html>
