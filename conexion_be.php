<?php

$conexion = mysqli_connect("localhost","root", "", "registro");
if($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'No se pudo conectar a la DB';
}


?>