<?php

function letraAl(){

    $letras = "QWERTYUIOPÑLKJHGFDSAZXCVBNMmnbvcxzasdfghjklñpoiuytrewq";

    return $letras[rand(0,strlen($letras)-1)];

}
?>