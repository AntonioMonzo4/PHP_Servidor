<?php
class EmpleadoTelefonos extends Empleado {

    private array $telefonos = [];


    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }


    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }


    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
    
}