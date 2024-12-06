<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
        

        /**
         * 203datosPersonales.php: Escribe un programa que 
         * almacene en variables tu nombre, primer apellido, 
         * segundo apellido, email, año de nacimiento y teléfono.
         * Luego muéstralos por pantalla dentro de una tabla.
         */



        $nombre = "Juan";
        $primerApellido = "Pérez";
        $segundoApellido = "García";
        $email = "juan.perez@example.com";
        $anioNacimiento = 1990;
        $telefono = "+34 123 456 789";

        
        echo "<table>
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>$nombre</td>
                </tr>
                <tr>
                    <td>Primer Apellido</td>
                    <td>$primerApellido</td>
                </tr>
                <tr>
                    <td>Segundo Apellido</td>
                    <td>$segundoApellido</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>Año de Nacimiento</td>
                    <td>$anioNacimiento</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>$telefono</td>
                </tr>
              </table>";
    ?>
</body>
</html>
