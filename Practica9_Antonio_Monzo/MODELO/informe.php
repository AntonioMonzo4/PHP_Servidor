<?php
class Informe {
    private $usuario;
    private $imc;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
        $this->imc = new IMC($usuario->getDatos()['peso'], $usuario->getDatos()['altura']);
    }

    //Genera el informe he añadido com`probación aqui por si acaso 
    public function generarInforme() {
        $datos = $this->usuario->getDatos();
        if (!$datos['email'] || !$datos['peso'] || !$datos['altura'] || !$datos['fecha_nacimiento']) {
            return "<p>Error: Datos ingresados no son válidos.</p>";
        }
        $imc = $this->imc->calcularIMC();
        $interpretacion = $this->imc->interpretarIMC();
        $validacion_fecha = $this->usuario->validarFecha($datos['fecha_nacimiento']);
        
        return "<h2>Informe de Salud</h2>
                <p>Nombre: {$datos['nombre']}</p>
                <p>Email: {$datos['email']}</p>
                <p>Peso: {$datos['peso']} kg</p>
                <p>Altura: {$datos['altura']} cm</p>
                <p>Fecha de nacimiento: $validacion_fecha</p>
                <p>IMC: $imc</p>
                <p>$interpretacion</p>";
    }
}

