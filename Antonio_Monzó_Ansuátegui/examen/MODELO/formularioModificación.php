<?php
include '../CONTROLADOR/conexion.php';

$conexion = mysqli_connect($host, $usuario, $contraseña, $bbdd);

if (!$conexion) {
    die("Error de conexión a la base de datos" . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = (isset($_POST['email'])) && (!empty($_POST['email'])) ? $_POST['email'] : '';
    $tlfn = (isset($_POST['tlfn'])) && (!empty($_POST['tlfn'])) ? $_POST['tlfn'] : '';

}
echo $email;
$sql_consultar = "SELECT * FROM registroasistentes where email = '$email'";
$resultado_consultar = mysqli_query($conexion, $sql_consultar);


if (!$resultado_consultar) {
    die("Error" . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado_consultar) > 0) {
  

    //DE AQUI SALDRIA EL FORMULARIO Y PROCEDEMOS A MODIFICSCION DE DATOS
echo'    <form action="../MODELO/modificacion_formulario.php" method="POST" >
 
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
<br>
    <label for="ape1">Primer Apellido</label>
    <input type="text" name="ape1" required>
<br>
    <label for="ape2">Segundo Apellido</label>
    <input type="text" name="ape2" required>
<br>
    <label for="centro">Centro de Trabajo</label>
    <input type="text" name="centro" required>
<br>
    <label for="tlfn">Teléfono</label>
    <input type="tel" name="tlfn" id="tlfn" required>
<br>
    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" required>
<br>
    <label for="cp">Código Postal</label>
    <input type="number" name="cp" id="cp" required max="99999" min="10000">
<br>
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" required>

<br>
    <label for="provincia">Provincia</label>
   
    <select class="inputs" name="provincia" id="provincia" required>
                        <option value="01">&Aacute;lava/Araba</option>
                        <option value="02">Albacete</option>
                        <option value="03">Alicante/Alacant</option>
                        <option value="04">Almer&iacute;a</option>
                        <option value="33">Asturias</option>
                        <option value="05">&Aacute;vila</option>
                        <option value="06">Badajoz</option>
                        <option value="07">Balears (Illes)</option>
                        <option value="08">Barcelona</option>
                        <option value="09">Burgos</option>
                        <option value="10">C&aacute;ceres</option>
                        <option value="11">C&aacute;diz</option>
                        <option value="39">Cantabria</option>
                        <option value="12">Castell&oacute;n/Castell&oacute;</option>
                        <option value="51">Ceuta</option>
                        <option value="13">Ciudad Real</option>
                        <option value="14">C&oacute;rdoba</option>
                        <option value="15">Coru&ntilde;a (A)</option>
                        <option value="16">Cuenca</option>
                        <option value="17">Girona</option>
                        <option value="18">Granada</option>
                        <option value="19">Guadalajara</option>
                        <option value="20">Guip&uacute;zcoa/Gipuzkoa</option>
                        <option value="21">Huelva</option>
                        <option value="22">Huesca</option>
                        <option value="23">Ja&eacute;n</option>
                        <option value="24">Le&oacute;n</option>
                        <option value="27">Lugo</option>
                        <option value="25">Lleida</option>
                        <option value="28" selected="selected">Madrid</option>
                        <option value="29">M&aacute;laga</option>
                        <option value="52">Melilla</option>
                        <option value="30">Murcia</option>
                        <option value="31">Navarra</option>
                        <option value="32">Ourense</option>
                        <option value="34">Palencia</option>
                        <option value="35">Palmas (Las)</option>
                        <option value="36">Pontevedra</option>
                        <option value="26">Rioja (La)</option>
                        <option value="37">Salamanca</option>
                        <option value="38">Santa Cruz de Tenerife</option>
                        <option value="40">Segovia</option>
                        <option value="41">Sevilla</option>
                        <option value="42">Soria</option>
                        <option value="43">Tarragona</option>
                        <option value="44">Teruel</option>
                        <option value="45">Toledo</option>
                        <option value="46">Valencia/Val&egrave;ncia</option>
                        <option value="47">Valladolid</option>
                        <option value="48">Vizcaya/Bizkaia</option>
                        <option value="49">Zamora</option>
                        <option value="50">Zaragoza</option>
    </select>


    <input type="submit" value="Actualizar el registro" name="enviar">
</form>';

  

}