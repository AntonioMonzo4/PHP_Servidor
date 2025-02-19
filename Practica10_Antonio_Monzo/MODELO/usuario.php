<?php
require_once 'conexion.php';
//AL NO SER NECESARIO COMO OBJETO LO HE MANTENIDO PERO NO LO USO COMO TAL SINO COMO
class Usuario {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    //MÉTODO PARA REGISTRAR EL USUARIO 
    public function registrarUsuario($nombre, $email, $peso, $altura, $fechaNacimiento, $sexo, $actividad, $objetivo) {
        $sql = "INSERT INTO usuarios (nombre, email, peso, altura, fecha_nacimiento, sexo, actividad, objetivo) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        //SACADO DE TUTORIAL + CONSULTA DADO QUE EL CÓDIGO DE LOS APUNTES NO ME FUNCIONABA FALLO MIO SEGURO PERO NO SABIA COMO ARREGLARLO
        $stmt = mysqli_prepare($this->conexion, $sql);
        mysqli_stmt_bind_param($stmt, "ssddssss", $nombre, $email, $peso, $altura, $fechaNacimiento, $sexo, $actividad, $objetivo);
        $resultado = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        return $resultado;
    }
}
?>
