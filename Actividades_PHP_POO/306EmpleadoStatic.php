<?php

class EmpleadoStatic extends EmpleadoSueldo {
    public static function toHtml(Empleado $emp): string {
        $telefonosList = "<ol>";
        foreach ($emp->listarTelefonos() as $telefono) {
            $telefonosList .= "<li>$telefono</li>";
        }
        $telefonosList .= "</ol>";

        return "<p>Nombre: {$emp->getNombreCompleto()}</p>"
            . "<p>Sueldo: {$emp->getSueldo()}</p>"
            . "<p>Teléfonos:</p>{$telefonosList}";
    }
}
