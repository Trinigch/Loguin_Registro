<?php
    $nombre_completo = $_POST('nombre_completo');
    $correo = $_POST('correo');
    $usuario = $_POST ('usuario');
    $contrasena = $_POST('contrasena');

    $query =    "INSERT INTO formulario(nombre, apellido, correo, constrasena) 
                VALUES('$nombre_completo', '$apellido', '$correo', '$constrasena')";
?>