<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Personas</title>
</head>

<body>

</body>

</html>



<?php

$cantidad = $_POST['cantidad'];


echo "<form action='237gestionarPersonas.php' method='POST'>";
for ($i = 1; $i <= $cantidad; $i++) {
    echo "<h3>Persona $i</h3>";
    echo "<label for='nombre_$i'>Nombre:</label>";
    echo "<input type='text' id='nombre_$i' name='personas[$i][nombre]' required><br>";
    echo "<label for='altura_$i'>Altura (cm):</label>";
    echo "<input type='number' id='altura_$i' name='personas[$i][altura]' required><br>";
    echo "<label for='email_$i'>Email:</label>";
    echo "<input type='email' id='email_$i' name='personas[$i][email]' required><br>";
}
echo "<button type='submit'>Enviar</button>";
echo "</form>";

?>