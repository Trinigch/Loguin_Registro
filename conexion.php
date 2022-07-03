<?php

$conexion = mysqli_commect("localhost","root", "", "yt_colores");
if($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'No se pudo conectar a la DB';
}


?>