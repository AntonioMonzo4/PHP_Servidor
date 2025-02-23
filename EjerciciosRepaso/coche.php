<?php

class Coche{
    private $marca;
    private $modelo;
    private $color;
    private $velocidad;


    public function __construct($marca,$modelo,$color,$velocidad=0){

        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->color=$color;
        $this->velocidad=$velocidad;
    }

    
  
    public function getModelo()
    {
        return $this->modelo;
    }

   
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }


   
    public function getMarca()
    {
        return $this->marca;
    }

    
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

 
    protected function getVelocidad()
    {
        return $this->velocidad;}
    
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    public function mostrarVelocidad(){
        return $this->getVelocidad();
    }



    public function acelerar($incremento){

        $this->velocidad += $incremento;
        return $this;
    }

    public function frenar($decremento){
        $this->velocidad -= $decremento;
        return $this;
    }
    
    

    public static function mostrarInformaciónCoche($coche){

        echo $coche->getVelocidad()." ".$coche->getColor();
        

    }


   

}

