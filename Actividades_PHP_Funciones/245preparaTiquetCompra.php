<?php


$cantidad = (int) $_GET['cantidad'];

echo '<form action="245imprimeTiquetCompra.php" method="post">';

for ($i = 0; $i < $cantidad; $i++) {
    echo '<input type="hidden" name="nombre'.$i.'" value="'.$_POST["nombre$i"].'">';
    echo '<input type="hidden" name="precio'.$i.'" value="'.$_POST["precio$i"].'">';
}

echo '<input type="hidden" name="cantidad" value="'.$cantidad.'">';

echo '<input type="submit" value="Ver Tiquet">';
echo '</form>';
