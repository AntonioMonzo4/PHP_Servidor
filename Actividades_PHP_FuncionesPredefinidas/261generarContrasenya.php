<?php
function generarContrasena($longitud) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $contrasena = '';
    
    for ($i = 0; $i < $longitud; $i++) {
        $contrasena .= $caracteres[rand( 0,strlen($caracteres) - 1)];
    }
    
    return $contrasena;
}
