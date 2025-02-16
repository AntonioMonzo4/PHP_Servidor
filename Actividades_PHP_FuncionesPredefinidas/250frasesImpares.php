<?php
function obtenerCaracteresImpares($frase) {

  $resultado = "";
  for ($i = 1; $i < strlen($frase); $i += 2) {
    $resultado .= $frase[$i];
  }

  return $resultado;
}

if(isset($_POST['frase'])) {

  $frase = $_POST['frase'];
  $resultado = obtenerCaracteresImpares($frase);

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>250fraseImpares</title>
</head>
<body>
  <h1>Frase con Caracteres en Posiciones Impares</h1>
  <form method="post">
    <input type="text" name="frase" placeholder="Introduce una frase" required>
    <input type="submit" value="Procesar">
  </form>

  
  <?php if(isset($resultado)): ?>
  <!-- Añadido de chatGPT pedi ayuda porque no mostraba y tras esto funciono -->
    <p>Resultado: <?= htmlspecialchars($resultado) ?></p>
  <?php endif; ?>
</body>
</html>
