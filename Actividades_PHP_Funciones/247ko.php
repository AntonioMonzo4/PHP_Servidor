<?php

echo "<h1>Acceso denegado ERROR</h1>";
if (!isset($usuarios[$usuario])) {
    echo "<p>Usuario incorrecto.</p>";
    
} elseif ($usuarios[$usuario] !== $clave) {
    echo "<p>Contraseña incorrecta.</p>";
}
echo "<a href='247login.php'>Volver</a>";
