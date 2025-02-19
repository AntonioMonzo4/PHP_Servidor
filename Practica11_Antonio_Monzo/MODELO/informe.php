<?php
require_once '../CONTROLADOR/conexion.php';

class Informe {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    //MÉTODO PARA OBTENER LOS USUARIOS
    public function obtenerUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($this->conexion, $sql);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }

    //SENTENCIAS SELECT PARA LAS ESTADÍSTICAS EN LOS DATOS
    public function obtenerEstadisticas() {
        $sql = "SELECT 
                    (SELECT COUNT(*) FROM usuarios WHERE sexo = 'Hombre') AS hombres,
                    (SELECT COUNT(*) FROM usuarios WHERE sexo = 'Mujer') AS mujeres,
                    (SELECT COUNT(*) FROM usuarios WHERE sexo = 'Mujer embarazada') AS embarazadas,
                    (SELECT AVG(peso / (altura / 100 * altura / 100)) FROM usuarios WHERE sexo = 'Hombre') AS imc_hombres,
                    (SELECT AVG(peso / (altura / 100 * altura / 100)) FROM usuarios WHERE sexo = 'Mujer') AS imc_mujeres
                FROM usuarios LIMIT 1";
        $resultado = mysqli_query($this->conexion, $sql);
        return mysqli_fetch_assoc($resultado);
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>