<?php
class Persona {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto(): string {
        return "$this->nombre $this->apellidos";
    }
}

//AL NO PEDIR OTRO ARCHIVO LO INCLUYO EN ESTE 

class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos);
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }
}
