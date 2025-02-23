<?php

class Matemáticas{

   // const PI =  3.1416;
    static $pi = 3.1416;

    static function areaCirculo($radio){
        return self::$pi*(pow($radio,2));
    }

}