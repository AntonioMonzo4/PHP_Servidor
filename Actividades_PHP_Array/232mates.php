<?php
$num = array();

for ($i = 0; $i < 33; $i++) {
    $num[] = rand(0, 100);
}

$mayor = max($num);
$menor = min($num);
$media = array_sum($numeros) / count($numeros);

echo "<p><strong>Mayor: </strong> $mayor</p>";
echo "<p><strong>Menor: </strong> $menor</p>";
echo "<p><strong>Media: </strong> " . number_format($media, 2) . "</p>";
?>
