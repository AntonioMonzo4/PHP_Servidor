<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <!--ESTILOS PARA LA TABLA REALMENTE INDIFERENTE-->
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 4px solid #ddd;
            text-align: center;
            padding: 8px;
            background-color:rgb(87, 175, 94);

        }
        
    </style>
</head>
<body>
    <?php
        



        $nombre = "Antonio";
        $primerApellido = "Monzó";
        $segundoApellido = "Ansuátegui";
        $email = "web.antoniom@gmail.com";
        $anioNacimiento = 2000;
        $telefono = "626 08 76 20";

        
        echo "<table>
                
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
