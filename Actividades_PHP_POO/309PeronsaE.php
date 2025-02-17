<?php

class PersonaE {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
}

class EmpleadoE extends PersonaE {
    private float $sueldo;
    private static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function debePagarImpuestos(): bool {
        return $this->edad > 21 && $this->sueldo > self::$sueldoTope;
    }
}