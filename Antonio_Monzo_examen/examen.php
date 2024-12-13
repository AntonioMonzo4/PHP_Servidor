<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <h1>Boleto de Lotería</h1>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD']==='POST'){


    //añadir mejor constante de precio
    $modulos=$_POST['numMod'];
    $dinero=$modulos*2.5; //intval en el numero de módulo +control adicional 
    $arrayNum=[];
    
    echo "Coste total: $dinero euros"; //añadir <p>


    //añadir orden con sort
    function numAleatorios($modulos,$arrayNum){

        for($i=0;$i<$modulos;$i++){
            for( $j= 0;$j<6;$j++){

                $numAl=rand(1,49);

            
            if(in_array($numAl,$arrayNum)){

                $numAl=rand(1,49);
                $arrayNum[$j]=$numAl;

            }else{
                $arrayNum[$j]=$numAl;
            }
            }
           echo"<h2>Módulo ".($i+1)."</h2>";

           echo " ";

           echo implode(", ",$arrayNum)."";

           echo " ";

           imprimirTabla($arrayNum,$i);
          
        }
    }

function imprimirTabla($arrayNum,$i){
    $contador=1;

        echo "<table border=1 bordercolor='red' cellpadding='5' cellspacing='0' >";


        for($fila=0;$fila<10;$fila++){
            echo "<tr align='center'>";
            for($columna= 0;$columna< 5;$columna++){

                if($fila==0 && $columna== 0){
                    echo "<td style='background-color:red'; color:white;>".($i+1)."</td>";
                }else{
                    if(in_array($contador,$arrayNum)){

                        echo "<td style='background-color:black'; color:white;>$contador</td>";
                    }else{

                        echo "<td>$contador</td>";
                    }
               
                    $contador++;
                }
                
        } echo "</tr>";
    }
    echo "</table>";
}
    numAleatorios($modulos,$arrayNum);



}


?>