
//DECLARACIÓN DE VARIABLES 
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");


//EJECUTAMOS FUNCIÓN ANCHO DE PAGINA
function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

window.addEventListener("resize", anchoPagina);
anchoPagina();

//EJECUTAMOS FUNCIÓN AL MOMENTO DE DARLE INICIAR SECCIÓN
function iniciarSesion(){

    if(window.innerWidth > 850) {
        formulario_register.style.display = "none"; //Ocultamos caja
        contenedor_login_register.style.left = "10px"; //Pixeles por defecto
        formulario_login.style.display = "block";  //Mostramos la caja
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_register.style.display = "none"; 
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";  
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);

//EJECUTAMOS FUNCIÓN AL MOMENTO DE DARLE REGISTRARSE
function register(){

    if(window.innerWidth > 850){
        formulario_register.style.display = "block"; //Mostramos la caja
        contenedor_login_register.style.left = "410px"; //desplazamos a la izquierda la caja
        formulario_login.style.display = "none";  //ocultamos la caja
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px"; 
        formulario_login.style.display = "none";  
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1"
    }
}

document.getElementById("btn__registrarse").addEventListener("click", register);

// contraseña

document.addEventListener('DOMContentLoaded', function() {
    // Cambiamos el estado inicial del ícono al cargar la página
    const contrasenaInput = document.getElementById('contrasenaInput');
    const iconoOjo = document.querySelector('.toggle-password');
    iconoOjo.classList.remove('fa-eye');
    iconoOjo.classList.add('fa-eye-slash');
});

// funcion para el efecto contraseña

function mostrarContrasena() {
    const contrasenaInput = document.getElementById('contrasenaInput');
    const iconoOjo = document.querySelector('.toggle-password');

    if (contrasenaInput.type === 'password') {
        contrasenaInput.type = 'text';
        iconoOjo.classList.remove('fa-eye-slash');
        iconoOjo.classList.add('fa-eye');
    } else {
        contrasenaInput.type = 'password';
        iconoOjo.classList.remove('fa-eye');
        iconoOjo.classList.add('fa-eye-slash');
    }
}

document.addEventListener('DOMContentLoaded', function(){
    const contrasenaLogin = document.getElementById('contrasena-login');
    const icon = document.querySelector('.toggle-icon');
    icon.classList.remove('fa-eye');
    icon.classList.add('fa-eye-slash');
})

function mostrarContrasenaLogin(){
    const contrasenaLogin = document.getElementById('contrasena-login');
    const icon = document.querySelector('.toggle-icon');

    if(contrasenaLogin.type === 'password'){
       contrasenaLogin.type = 'text';
       icon.classList.remove('fa-eye-slash');
       icon.classList.add('fa-eye');
    } else {
        contrasenaLogin.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }


}

function validarUsuario() {
    var usuarioInput = document.getElementById("usuarioInput");
    usuarioInput.value = usuarioInput.value.replace(/[^a-zA-Z0-9]/g, '');
}

// validacion formulario y campos

function validarFormulario(){
    
    var contrasena = document.getElementById('contrasenaInput').value;

    usuarioInput.addEventListener("input", function() {
        this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
    });
   
    var patern =  /^[a-zA-Z0-9!@#$%^&*]+$/;
    if(!patern.test(contrasena)){
        document.getElementById('mensajeContrasena').innerHTML = "La contraseña no puede contener espacios o caracteres especiales.";
        return false; //Evitar el envío del formulario
    } 
    if(contrasena.length < 8){
        document.getElementById("mensajeContrasena").innerHTML = "La contraseña debe tener al menos 8 caracteres.";
        return false;
    } else {
        mensajeContrasena.innerHTML = ""; // Eliminar el mensaje de error si es válido
      }  

      const contrasenaInput = document.getElementById("contrasenaInput");
      contrasenaInput.addEventListener("input", function() {
        const mensajeContrasena = document.getElementById("mensajeContrasena");
        mensajeContrasena.innerHTML = ""; // Eliminar el mensaje de error al seguir escribiendo
      });

    // Si todas las validaciones son exitosas, el formulario se enviará al servidor
    return true;
}




