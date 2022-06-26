document.getElementById("btn__registrarse").addEventListener("click", register);
document.getElementById("btn__iniciar-sesion").addEventListener("click",iniciarSesion);

var contenedor_loguin_register = document.querySelector(".contenedor__loguin-register");

var formulario__loguin = document.querySelector(".formulario__loguin");
var formulario__register = document.querySelector(".formulario__register");

var caja__trasera_loguin=document.querySelector(".caja__trasera-loguin");
var caja__traser_register=document.querySelector(".caja__trasera-register");

function register(){
   
    formulario__register.style.display="block";
    contenedor_loguin_register.style.left="410px";
    formulario__loguin.style.display="none";
    caja__traser_register.style.opacity = "0";
    caja__trasera_loguin.style.opacity="1";
}

function iniciarSesion(){
   
    formulario__register.style.display="none";
    contenedor_loguin_register.style.left="10px";
    formulario__loguin.style.display="block";
    caja__traser_register.style.opacity = "1";
    caja__trasera_loguin.style.opacity="0";
}