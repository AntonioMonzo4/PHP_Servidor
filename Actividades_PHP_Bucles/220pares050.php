<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares 0-50</title>
</head>
<body>
    <h1>Números Pares del 0 al 50</h1>
    <ul>
        <?php
        $pares = [];
        for ($i = 0; $i <= 50; $i += 2) {
            $pares[] = $i;
        }

        shuffle($pares); 
        foreach ($pares as $num) {
            echo "<li>$num</li>";
        }
        ?>
    </ul>
</body>
</html>
