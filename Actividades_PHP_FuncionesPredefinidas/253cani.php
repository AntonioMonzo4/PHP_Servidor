<?php

function canificador($frase){

    for ($i = 0; $i < strlen($frase); $i++) {
        if($i%2==0){
            $frase[$i]= strtoupper($frase[$i]);
        }
    }
    return $frase;
}

echo canificador("acho pero komo meh dices esoh teh meto um meko q flispas vale");
?>