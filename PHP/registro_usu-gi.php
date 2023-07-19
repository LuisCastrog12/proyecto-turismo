<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro GLUP IN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="icon" href="../IMG/icono.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


<?php
/*damos acceso a la base de datos a la variable conexion_gi...*/
include 'ConexionBD.php';

/*declaramos variables en las cuales se van almacenar datos en los inputs*/

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

/*insertar datos en la tabla de la base de datos*/

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
         VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
 

         /*verificar que el correo no se repita en la bd*/
         $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

         if(mysqli_num_rows($verificar_correo) > 0){
            ?>
            <script>
            Swal.fire({
            title: 'Correo existente',
            text: "¡Registrate nuevamente!",
            icon: 'warning', 
            }).then((result) => {
            if (result.isConfirmed) {
            window.location.href="../Secundario/login.php"
            }
            })
                        
            </script>
             <?php
                exit;
}

         /*verificar que el nombre de usuario no se repita en la bd*/
         $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
         if(mysqli_num_rows($verificar_usuario) > 0){
            ?>
                <script>
                Swal.fire({
                    title: 'Error al ingresar',
                    text: "¡Nombre de usuario existente!",
                    icon: 'warning', 
                  }).then((result) => {
                    if (result.isConfirmed) {
                     window.location.href="../Secundario/login.php"
                    }
                  })
                </script>
                <?php
            exit();
         }

           /*ejecutamos para que muestre los datos*/

         $ejecutar = mysqli_query($conexion, $query);

         /*si los datos son correctos, entonces nos mostrara un mensaje de ingreso exitoso
         y nos mandara a la pagina de inicio*/

         if($ejecutar){
           
          ?>
          <script>
          Swal.fire({
              title: 'Registrado con exito',
              text: "¡Usuario registrado exitosamente!",
              icon: 'success', 
            }).then((result) => {
              if (result.isConfirmed) {
               window.location.href="../Secundario/login.php"
              }
            })
          </script>
          <?php
         } 
         /*No se crea el usuario y nos manda la alerta*/
         else{
          ?>
          <script>
          Swal.fire({
              title: 'Error al registrar',
              text: "¡Usuario no registrado!",
              icon: 'warning', 
            }).then((result) => {
              if (result.isConfirmed) {
               window.location.href="../Secundario/login.php"
              }
            })
          </script>
          <?php
         }

         /*En caso de error, cerramos la conexión*/

         mysqli_close($conexion);

?>