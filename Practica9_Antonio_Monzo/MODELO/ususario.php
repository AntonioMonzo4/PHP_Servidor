<?php

class Usuario{

    private $nombre;
    private $email;
    private $peso;
    private $altura;
    private $fecha_nacimiento;
    private $sexo;
    private $actividad;
    private $objetivo; 

    public function __construct($nombre,$email,$peso,$altura,$fecha_nacimiento,$sexo,$actividad,$objetivo) {

        $this->nombre = $nombre;
        $this->email = $email;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->sexo = $sexo;
        $this->actividad = $actividad;
        $this->objetivo = $objetivo;

    }

    //método para validar la fecha lo he incluido aqui porque creo que debe ser un método del usuario pero al no estar seguro lo he mantenido como public para facilitar su uso 
    //se que no da el formato del todo correcto pero es entre una mezcla de un tutorial y lo que he podido sacar de documentación 
    public function validarFecha($fecha) {
        $timestamp = strtotime($fecha);
        if ($timestamp === false) {
            return null;
        }
        return date("l, d \d\e F \d\e Y", $timestamp);
    }
    
    //He preferido crear un solo método porque crear mas getters me resultaba más incómodo
    public function getDatos() {
        return [
            'nombre' => $this->nombre,
            'email' => $this->email,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'sexo' => $this->sexo,
            'actividad' => $this->actividad,
            'objetivo' => $this->objetivo
        ];
    }

}



   

?>
