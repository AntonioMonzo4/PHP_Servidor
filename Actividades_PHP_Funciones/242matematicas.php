
<?php

function digitos (int $num){
     $resultado=0;
     while($num>1){
        $num=$num%10;
        $resultado++;

      
     }
     return $resultado;
}
function digitoN(int $num, int $pos): int {
   $numStr = (string) abs($num);
   return isset($numStr[$pos - 1]) ? (int) $numStr[$pos - 1] : -1;
}

function quitaPorDetras(int $num, int $cant): int {
   return (int) substr((string) $num, 0, -$cant) ?: 0;
}

function quitaPorDelante(int $num, int $cant): int {
   return (int) substr((string) $num, $cant) ?: 0;
}

?>