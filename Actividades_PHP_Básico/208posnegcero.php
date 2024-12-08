<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNO NÚMEROS</title>
</head>

<body>

</body>

</html>


<?php

$num1 = 42;
$num2 = -42;
$num3 = 0;

function getSigno($a)
{

    if ($a == 0) {
        return "<p>El número " . $a . " es 0</p>";
    } else if ($a < 0) {
        return "<p>El número " . $a . " es negativo</p>";
    }
    if ($a > 0) {
        return "<p>El número " . $a . " es positivo</p>";
    }
}
echo getSigno($num1);
echo getSigno($num2);
echo getSigno($num3);

?>