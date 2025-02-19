<?php
require_once '../MODELO/conexion.php';
require_once '../MODELO/Informe.php';

$informe = new Informe($conexion);
$usuarios = $informe->obtenerUsuarios();
$estadisticas = $informe->obtenerEstadisticas();

echo "<h1>Informe de Usuarios</h1>";

echo "<h2>Listado de Usuarios</h2><ul>";
foreach ($usuarios as $usuario) {
    echo "<li>{$usuario['email']}<ul>
            <li>Peso: {$usuario['peso']} kg</li>
            <li>Altura: {$usuario['altura']} cm</li>
            <li>Fecha de nacimiento: {$usuario['fecha_nacimiento']}</li>
            <li>Sexo: {$usuario['sexo']}</li>
            <li>Actividad física: {$usuario['actividad']}</li>
            <li>Objetivo: {$usuario['objetivo']}</li>
          </ul></li>";
}
echo "</ul>";


echo "<div id='estadisticas''>";
echo "<h2>Estadísticas Generales</h2>";
echo "<p>Hombres: {$estadisticas['hombres']}</p>";
echo "<p>Mujeres: {$estadisticas['mujeres']}</p>";
echo "<p>Mujeres embarazadas: {$estadisticas['embarazadas']}</p>";
echo "<p>IMC Promedio Hombres: {$estadisticas['imc_hombres']}</p>";
echo "<p>IMC Promedio Mujeres: {$estadisticas['imc_mujeres']}</p>";
echo "</div>";

// Botón para volver al formulario
echo '<button onclick="window.location.href=\'index.html\'">Volver al formulario</button>';
?>