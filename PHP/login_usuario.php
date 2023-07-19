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
    require 'ConexionBD.php';
    $db = new Database();
    $con = $db->conectar();
    session_start();
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = $con->prepare("SELECT * FROM administradores where correo='$correo'");
    $query->execute();
    $confirm_admin = $query->fetch(PDO::FETCH_ASSOC);   //consulta si es usuario o admin
    
    $query2 = $con->prepare("SELECT * FROM usuarios where correo='$correo'");
    $query2->execute();
    $confirm_usuario = $query2->fetch(PDO::FETCH_ASSOC);

    if($confirm_admin){
        if($confirm_admin['contrasena']==$contrasena){
            $id = $confirm_admin['id'];  
            $_SESSION['admin'] = $confirm_admin['id'];//se guarda el id del admin en la session
            echo '<script>window.location.href="../Admin/Admin.php?id='.$id.'"</script>';
        }else{?>
            <script>
                Swal.fire({
                title: 'Usuario no habilitado para iniciar sesión',
                text: "¡Por favor inicie con correo electrónico!",
                icon: 'warning', 
                }).then((result) => {
                if (result.isConfirmed) {
                 window.location.href="../Secundario/login.php"
                }
                })
            </script><?php
            exit();
        }
    }else if($confirm_usuario){
        if($confirm_usuario['contrasena'] == $contrasena){
            $_SESSION['usuario']=$confirm_usuario['id']; //se guarda el id del usuario en la session
            header("location: ../index.php");
        }else{?>
            <script>
                Swal.fire({
                title: 'Contraseña Incorrecta',
                text: "¡Ingresa la contraseña correcta para continuar!",
                icon: 'warning', 
                }).then((result) => {
                if (result.isConfirmed) {
                 window.location.href="../Secundario/login.php"
                }
                })
            </script><?php
            exit();
        }
    }else{ //en caso de no ser admin o usuario ?>    
        <script>
            Swal.fire({
            title: 'Usuario no encontrado',
            text: "¡El usuario no existe, registrate para continuar!",
            icon: 'warning', 
            }).then((result) => {
            if (result.isConfirmed) {
             window.location.href="../Secundario/login.php"
            }
            })
        </script><?php
        exit();
    }
?>

</body>
</html>
