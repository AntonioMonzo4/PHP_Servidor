<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMA DEL 1 AL 10</title>
</head>
<body>
    
</body>
</html>
<?php

$inicial =1;
$resultado = 0;
for ($i = 0; $i <=9; $i++) {
    $resultado+=$inicial;
    $inicial++;
}

echo "<p>".$resultado."</p>";


?>