<?php

include 'conexion_be.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_loguin= mysqli_query($conexion, "SELECT * FROM formulario  WHERE correo='$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_loguin)>0){
    header("location:bienvenida.php");
}else{
    echo '
    <script>
        alert("Usuario no exite");
        window.location="../index.php";
    </script>'
}
}
?>