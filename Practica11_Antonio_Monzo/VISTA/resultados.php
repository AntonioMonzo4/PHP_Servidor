<?php
require_once '../CONTROLADOR/conexion.php';
require_once '../MODELO/informe.php';


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



echo "<div >";
echo "<h2>Estadísticas Generales</h2>";
echo "<p>Hombres: " . ($estadisticas['hombres'] ?? 'No disponible') . "</p>";
echo "<p>Mujeres: " . ($estadisticas['mujeres'] ?? 'No disponible') . "</p>";
echo "<p>Mujeres embarazadas: " . ($estadisticas['embarazadas'] ?? 'No disponible') . "</p>";
echo "<p>IMC Promedio Hombres: " . (isset($estadisticas['imc_hombres']) ? number_format($estadisticas['imc_hombres'], 2) : 'No disponible') . "</p>";
echo "<p>IMC Promedio Mujeres: " . (isset($estadisticas['imc_mujeres']) ? number_format($estadisticas['imc_mujeres'], 2) : 'No disponible') . "</p>";
echo "</div>";

echo '<a href="index.php">Volver al inicio</a>';
?>