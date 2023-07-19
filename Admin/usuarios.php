<?php
  require '../PHP/ConexionBD.php';
  
  session_start();  //sesion inicializada
  if(!isset($_SESSION['admin'])){     //verificar sesion de admin
    header("location: ../secundario/login.php");
    exit();
  }
  $idAdmin = $_SESSION['admin']; // GUARDAMOS LA SESION EN LA VARIABLE IDADMIN

  $db = new Database();
  $con = $db->conectar();

  /* Consulta a todos los usuarios */
  $query = $con->prepare("SELECT * FROM usuarios");
  $query->execute();
  $user = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/tabla.css">
    <link rel="icon" href="../IMG/icono.png">
  <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
  <title>Usuarios -GLUP IN</title>
</head>
<body>
  <section id="user">
    <div class="container padd-50">
      <div class="title">
        <h1>Usuarios - GLUP IN</h1>
      </div>
      <div class="busqueda">
        <form action="../PHP/buscar_usuarios.php" method="POST" autocomplete="off">
          <input type="text" required placeholder="Buscar..." id="buscar" name="buscar">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
      <div class="boton">
        <a class ="btn" href="agregar_usuario.php">Añadir Usuario</a>
      </div>
      <div class="tabla">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Usuario</th>
              <th>Contraseña</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
           <?php foreach($user as $row){?>  <!-- RECORREMOS Y MOSTRAMOS RESULTADO EN CADA COLUM -->
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombre_completo'];?></td>
                <td><?php echo $row['correo'];?></td>
                <td><?php echo $row['usuario'];?></td>
                <td><?php echo $row['contrasena'];?></td>
                <td><a href="editar_usuario.php?id=<?php echo $row['id'];?>" class="editar"><i class="fa-solid fa-pen"></i></a></td>
                <td><a href="../PHP/eliminar_usuario.php?id=<?php echo $row['id'];?>" class="eliminar"><i class="fa-solid fa-trash-can"></i></a></td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <div style="margin-top: 1.5rem;" class="boton">
        <a class ="btn" href="Admin.php?id=<?php echo $idAdmin?>"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </div>
  </section>
</body>
</html>