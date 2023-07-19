<?php
  require '../PHP/ConexionBD.php'; //LLAMAMOS LA CONEXIÓN 

  $db = new Database();
  $con = $db->conectar();
  $id = $_GET['id'];

  $query = $con->prepare("SELECT * FROM usuarios where id=$id"); //CONSULTAMOS 
  $query->execute();
  $usuario = $query->fetch(PDO::FETCH_ASSOC);

  session_start(); //INICIALIZAMOS SESION 
  if(isset($_SESSION['admin'])){  //SI ENCUENTRA ADMIN NOS MANDA A USUARIOS
    $ruta = "usuarios.php";
  }else if(isset($_SESSION['usuario'])){  //SI ENCUENTRA USUARIOS NOS MANDA AL INICIO DE LA PAG.
    $ruta = "../Secundario/perfil.php?id=$id";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/agregar_editar.css">
    <link rel="icon" href="../IMG/icono.png">
  <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>

  <title>ADMIN-GLUP IN</title>
</head>
<body>

  <!-- TABLA PARA EDITAR USUARIOS -->

  <div class="center">
    <h1>EDITAR USUARIO</h1>
    <form action="../PHP/guardar_usuario.php" method="POST" autocomplete="off">
      <input type="hidden" id="id" name="id" value="<?php echo $id?>">
      <div class="txt-field">
        <input type="text" id="Nombre" name="Nombre" value="<?php echo $usuario['nombre_completo'];?>" required>
        <span></span>
        <label for="Nombre">Nombre</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Correo" name="Correo" value="<?php echo $usuario['correo'];?>" required>
        <span></span>
        <label for="Correo">Correo</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Usuario" value="<?php echo $usuario['usuario'];?>" name="Usuario">
        <span></span>
        <label for="Usuario">Usuario</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Contraseña" value="<?php echo $usuario['contrasena'];?>" name="Contraseña" required>
        <span></span>
        <label for="Contraseña">Contraseña</label>
      </div>

      <input type="submit" value="Actualizar">
      <div class="volver">
        <a href="<?php echo $ruta;?>"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </form>
  </div>
</body>
</html>