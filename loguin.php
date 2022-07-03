<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin y registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./assets/css/estilo.css">
</head>
<body>
        <main>

            <div class="contenedor__todo">

                <div class="caja__trasera">
                    <div class="caja__trasera-loguin">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p> Inicia sesión para entrar en la pagina </p>
                        <button id="btn__iniciar-sesion">Iniciar-Sesion </button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aun no tienes una cuenta?</h3>
                        <p> Registrate para que puedas iniciar sesión </p>
                        <button id="btn__registrarse"> Registrarse</button>
                    </div>
                </div>
                           <!---Formulario loguin y registro -->   
                <div class= "contenedor__loguin-register">

                        <!--Loguin-->
                    <form action="" class="formulario__loguin">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="correo" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>
    
                        <!--Register-->

                    <form action="registro_usuario_be.php" metodo ='POST' class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">    
                        <input type="text" placeholder="Apellido" name ="apellido">
                        <input type="text" placeholder="Correo" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>   
                    
                </div>   
                                                     
            </div>
        </main>
        <script src="./assets/js/script.js"></script>
    </body>
    </html>