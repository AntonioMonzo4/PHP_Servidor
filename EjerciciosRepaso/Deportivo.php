<?php
include "coche.php";
class Deportivo extends Coche{

    private $potencia;

  

    public function __construct($marca, $modelo, $color, $velocidad = 0,$potencia){
 
        parent::__construct($marca,$modelo,$color,$velocidad);
        $this->potencia=$potencia;

    }

    public function getPotencia()
    {
        return $this->potencia;
    }


    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;

        return $this;
    }


    public function acelerar($incremento){
        parent::acelerar($incremento*2);
        
        return $this;
    }

}