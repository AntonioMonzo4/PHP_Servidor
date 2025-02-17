<?php

class EmpleadoConstante extends EmpleadoTelefonos {
    private const SUELDO_TOPE = 3333;
    
    public function debePagarImpuestos(): bool {
        return $this->getSueldo() > self::SUELDO_TOPE;
    }
}