<?php

class EmpleadoSueldo extends EmpleadoTelefonos {

    private static float $sueldoTope = 3333;

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldo): void {
        self::$sueldoTope = $sueldo;
    }
}
