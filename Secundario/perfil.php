<?php
  require '../PHP/ConexionBD.php';
//si no hay una sesion usuario te manda a que inicies sesion
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("location: login.php");
    exit();
  }

  $db = new Database();
  $con = $db->conectar();

     // realizamos la consulta

  $id = $_GET['id'];
  $query = $con->prepare("SELECT * FROM usuarios where id=$id");
  $query->execute();
  $user = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/perfil.css">
    <link rel="icon" href="../IMG/icono.png">
  <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
  <title>Perfil</title>
</head>
<body>
  <section class="section home">
    <div class="container">
      <div class="row">
        <div class="home-img">
          <img src="../IMG/user.jpg" alt="user">
        </div>
        <div class="home-info padd-15">
          <h3 class="saludo">Hola <span><?php echo $user['nombre_completo'];?></span>, bienvenido a GLUP - IN!</h3>
          <div class="boton">
            <a href="../Admin/editar_usuario.php?id=<?php echo $id?>" class="btn"><i class="fa-solid fa-user-pen"></i> Editar Perfil</a>
          </div>
          <p><span>Nombre Completo:</span> <?php echo $user['nombre_completo'];?></p>
          <p><span>Correo:</span> <?php echo $user['correo'];?></p>
          <p><span>Usuario:</span> <?php echo $user['usuario'];?></p>
          <p><span>Contraseña:</span> <input type="password" value="<?php echo $user['contrasena'];?>" readonly onmousedown="return false;"></p>          
          <div class="boton">
            <a href="../PHP/cerrar_sesion.php" class="btn"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a>
          </div>
          <div class="boton">
            <a href="../index.php" class="btn-2"><i class="fa-solid fa-rotate-left"></i>Volver</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>