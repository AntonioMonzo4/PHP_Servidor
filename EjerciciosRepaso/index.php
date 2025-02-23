<?php

include "Deportivo.php";
include "Matemáticas.php";


$cochecito = new Coche("Ferrari","muhRapido","rojo",300);


echo $cochecito->mostrarVelocidad();

$cochecito->acelerar(100);

echo $cochecito->getMarca();
echo $cochecito->mostrarVelocidad();
echo $cochecito->getColor();
echo $cochecito->getModelo();

$deportivo = new Deportivo("Opel","corsa","blanco",120,200);

echo $deportivo->getPotencia();
echo $deportivo->mostrarVelocidad();
echo $deportivo->getColor();
echo $deportivo->getMarca();
echo $deportivo->getModelo();

$deportivo->acelerar(3);

echo $deportivo->mostrarVelocidad();

echo Matemáticas::areaCirculo(2);

if($deportivo instanceof Coche){
    echo "Si lo es";

}

if( method_exists($cochecito,'acelerar')&& property_exists($cochecito,'color')){

    echo get_class($cochecito);
}


Coche::mostrarInformaciónCoche($cochecito);