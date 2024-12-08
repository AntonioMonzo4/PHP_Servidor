<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    
</body>
</html>

<?php 

$arrayB= [['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],
['nombre'=>'Antonio', 'altura'=>174, 'email'=>'antonio@correo.com'],
['nombre'=>'Fernando', 'altura'=>152, 'email'=>'fernando@correo.com'],
['nombre'=>'Ana', 'altura'=>163, 'email'=>'ana@correo.com'],
['nombre'=>'Dorotea', 'altura'=>192, 'email'=>'doretea@correo.com']
];

echo "<table border=1> ";
echo "<th> NOMBRE </th> <th> ALTURA </th> <th> EMAIL </th> ";
foreach ($arrayB as $subArray) {
    echo "<tr>";
    
    foreach ($subArray as $key => $value) {
        echo "<td> $value </td>";

    }
    
    echo "</tr>";
    

}


echo "</table> ";

?>