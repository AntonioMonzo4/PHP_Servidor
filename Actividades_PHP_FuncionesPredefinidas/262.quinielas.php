<?php
function generarQuiniela() {
    $resultadosPrincipales = ['1', 'X', '2'];
    $resultadosPleno = ['0', '1', '2', 'M'];
    $quinielaResultados = [];
    
    for ($i = 0; $i < 14; $i++) {
        $quinielaResultados[] = $resultadosPrincipales[rand(0, 2)];
    }
    
    $quinielaResultados[] = [$resultadosPleno[rand(0, 3)], $resultadosPleno[rand(0, 3)]];
    
    return $quinielaResultados;
}

function generarTablaQuiniela(array $quiniela) {
    $html = "<table border='1'><tr><th>Partido</th><th>Resultado</th></tr>";
    
    foreach ($quiniela as $indice => $resultado) {
        $html .= "<tr><td>" . ($indice + 1) . "</td><td>" . (is_array($resultado) ? implode('-', $resultado) : $resultado) . "</td></tr>";
    }
    
    $html .= "</table>";
    return $html;
}

$quinielaGenerada = generarQuiniela();
echo "\nQuiniela Generada:\n";
print_r($quinielaGenerada);

echo "\nTabla HTML de Quiniela:\n";
echo generarTablaQuiniela($quinielaGenerada);
?>
