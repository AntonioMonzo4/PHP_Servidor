<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre y altura</title>
</head>
<body>

    
</body>
</html>
<?php 

$sumaAlturas=0;
$media=0;

echo  "<table border=1>";


$array = [
    "Antonio" => 174,
    "Pepe" => 155,
    "Jaime" => 182,
    "Mercedes" => 162,
    "Wayne" => 170
];

foreach ($array as $nombre => $altura) {
    echo "<tr>
            <td>$nombre</td>
            <td>$altura</td>
          </tr>";
    $sumaAlturas += $altura;
}

$media=$sumaAlturas/count($array);
echo "<td>Suma: </td>
      <td>$sumaAlturas</td>
      <tr>
      <td>Media: </td>
      <td>$media</td>
      </tr>";

echo "</table>"

?>