<?php

class EmpleadoConstructor8 extends EmpleadoTelefonos {
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {}
}