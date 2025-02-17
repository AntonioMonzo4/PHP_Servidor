<?php
class PersonaH {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public static function toHtml(PersonaH $p): string {
        return "<p>Nombre: {$p->nombre} {$p->apellidos}</p>";
    }
}

class EmpleadoH extends PersonaH {
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos);
        $this->sueldo = $sueldo;
    }

    public static function toHtml(PersonaH $p): string {
        if ($p instanceof EmpleadoH) {
            return "<p>Nombre: {$p->nombre} {$p->apellidos}</p><p>Sueldo: {$p->sueldo}</p>";
        }
        return parent::toHtml($p);
    }
}