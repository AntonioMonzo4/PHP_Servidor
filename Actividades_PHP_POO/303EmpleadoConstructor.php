<?php
class EmpleadoConstructor extends EmpleadoTelefonos {

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos, $sueldo);
    }
}

