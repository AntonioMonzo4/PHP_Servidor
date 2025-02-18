<?php
class IMC {
    //Al no necesitar de un usuaio para meter los datos se crea aparte sin necesidad de herencia
    private $peso;
    private $altura;

    public function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura / 100;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){

        return $this->peso;
    }

    public function calcularIMC() {
        return number_format( $this->getPeso()/($this->getAltura()*$this->getAltura()),2);

        
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
