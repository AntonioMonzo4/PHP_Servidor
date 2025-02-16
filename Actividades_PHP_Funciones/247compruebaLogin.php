<?php
$user = ['contra' => 'abcd1234', 'usu' => 'pepe'];

$usuario = $_POST['usuario'] ;
$clave = $_POST['clave'] ;

if ($user[$usuario] === $clave) {

    include '247ok.php';
} else {
    include '247ko.php';
}
