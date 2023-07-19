<?php 
 require 'conexionBD.php';  //conexion a la base de datos
 $db = new Database ();
  $con = $db ->conectar();     
  $buscar = $_POST['buscar'];
  $query = $con -> prepare("SELECT * FROM usuarios WHERE nombre_completo='$buscar'");
  $query->execute();
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
  $contador = 0;
  //BUSCADOR CON CONSULTA A TABLA USUARIOS, COLUMNA NOMBRE COMPLETO

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
            <?php foreach($usuarios as $row){?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombre_completo'];?></td>
                <td><?php echo $row['correo'];?></td>
                <td><?php echo $row['usuario'];?></td>
                <td><?php echo $row['contrasena'];?></td>
                <td><a href="../Admin/editar_usuario.php?id=<?php echo $row['id'];?>" class="editar"><i class="fa-solid fa-pen"></i></a></td>
                <td><a href="../PHP/eliminar_usuario.php?id=<?php echo $row['id'];?>" class="eliminar"><i class="fa-solid fa-trash-can"></i></a></td>
              </tr>
            <?php $contador++;}
             if ($contador == 0){?>
              <tr>
                <td colspan="8">No se encontró lo que buscabas</td> 
              </tr>
               <?php  }
            ?>
          </tbody>
        </table>
      </div>
      <div style="margin-top: 1.5rem;" class="boton">
      <a class ="btn" href="../Admin/usuarios.php"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </div>
  </section>
</body>
</html>