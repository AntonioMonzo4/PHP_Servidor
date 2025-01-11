<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
</head>

<body>
    <?php


    if ($_SERVER["REQUEST_METHOD"] === "POST") {




        $animal = $_POST['animal'];
        $accion = $_POST["accion"];
        $adjetivo = $_POST["adjetivo"];
        $adverbio = $_POST["adverbio"];

    
        $texto = "<p>Tu " . $animal . " " . $adjetivo . " se dedica a " . $accion . " " . $adverbio . "</p>";

        echo  $texto;
    }

    ?>
</body>

</html>