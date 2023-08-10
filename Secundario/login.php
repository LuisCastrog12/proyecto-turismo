<?php

/*mandamos al inicio de la pagina en caso de iniciar sesión*/
session_start();
if(isset($_SESSION['usuario'])){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro GLUP IN</title>
    <link rel="icon" href="../img/icono.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sección para entrar a Glup in</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de iniciar y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="../PHP/login_usuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena-login" required>
                    <i class="toggle-icon far fa-eye" onclick="mostrarContrasenaLogin()"></i>
                    <div class="conten">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                        <div class="boton">
                            <button>Entrar</button>
                        </div>
                    </div>
                </form>
                <!--Registro-->
                <form action="../PHP/registro_usu-gi.php" method="POST" class="formulario__register" onsubmit="return validarFormulario()">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" id="usuarioInput" oninput="validarUsuario()" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" id="contrasenaInput" oninput="validarContrasena()" required>
                    <p id="mensajeContrasena" style="color: red; font-size: 14px; font-weight: bold;"></p>
                    <i class="toggle-password far fa-eye" onclick="mostrarContrasena()"></i>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>


    <script src="../JS/login.js"></script> 
</body>
</html>