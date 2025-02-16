<?php


$cantidad = (int) $_POST['cantidad'];
$total = 0;


echo "<table border='1'>
        <tr>
            <th>Producto</th>
            <th>€</th>
            
        </tr>";


for ($i = 0; $i < $cantidad; $i++) {
    $nombre = $_POST["nombre$i"];
    $precio = $_POST["precio$i"];
    $total += $precio;
    
    echo "<tr>
            <td>$nombre</td>
            <td>$precio</td>
            
          </tr>";
}

echo "<tr>
        <td>Total</td>
        <td>$total</td>
  
      </tr>";
echo "</table>";
