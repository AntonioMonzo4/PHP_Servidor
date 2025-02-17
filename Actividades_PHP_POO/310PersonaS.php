<?php

class PersonaS {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
}

class EmpleadoS extends PersonaS {
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function __toString(): string {
        return "Nombre: {$this->nombre} {$this->apellidos}, Edad: {$this->edad}, Sueldo: {$this->sueldo}";
    }
}
