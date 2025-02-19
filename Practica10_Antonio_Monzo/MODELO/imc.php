<?php
class IMC {
    private $peso;
    private $altura;

    public function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura / 100;
    }

    public function calcularIMC() {
        return ($this->altura > 0) ? round($this->peso / ($this->altura * $this->altura), 1) : null;
    }

    public function interpretarIMC() {
        $imc = $this->calcularIMC();
        if (!$imc) return "Datos inválidos para calcular el IMC.";
        if ($imc < 18) return "Tu peso es inferior al saludable.";
        if ($imc < 20) return "Tu peso se encuentra en la banda más baja del peso saludable.";
        if ($imc < 23) return "Enhorabuena. Tu peso es el óptimo.";
        if ($imc < 25) return "Tu peso está en la banda alta del peso normal.";
        if ($imc < 28) return "Tienes exceso de peso.";
        if ($imc < 30) return "Tienes exceso de peso. Reducir tu peso es necesario.";
        return "Tienes peso muy superior a lo aconsejable.";
    }
}
?>
