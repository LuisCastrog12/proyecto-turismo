<?php
  require '../PHP/ConexionBD.php';
  
  // Confirma una sesion de admin iniciada
  session_start();
  if(!isset($_SESSION['admin'])){
    header("location: ../secundario/login.php");
    exit();
  }

  $db = new Database();
  $con = $db->conectar();

  $id = $_GET['id'];
  $query = $con->prepare("SELECT * FROM administradores where id=$id"); // Consulta mysql a la base de datos
  $query->execute(); // Ejecuta la consulta
  $admin = $query->fetch(PDO::FETCH_ASSOC); // Guarda los datos de la consulta en un arreglo
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../IMG/icono.png">
  <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
  <title>Admin - GLUP IN</title>
</head>
<body>
   <!-- saludo -->
  <section class="home section"> 
    <div class="container">
      <div class="row">
        <div class="home-info">
          <h3 class="hello">Hola <span><?php echo $admin['nombre'];?></span>, bienvenido!</h3>
          <h3 class="texto">Te encuentras en la seccion de administracion, donde podras: <span class="typing"></span></h3>
          <p>Presiona el boton, y podras acceder a las acciones para poder administrar los <span>usuarios</span> y los <span>sitios turisticos</span>, podras <span>verlos</span>, <span>actualizarlos</span> y <span>eliminarlos</span>.</p>
          <a href="#select" class="btn"><i class="fa-solid fa-location-arrow"></i> Acciones</a>
        </div>
        <div class="home-img">
          <img src="../IMG/admin/Admin<?php echo $admin['id'];?>.jpg" alt="Admin<?php echo $admin['id'];?>">
        </div>
      </div>
    </div>
  </section>
    <!-- botones -->
  <section id="select" class="select section">
    <div class="container">
      <div class="row">
        <div class="title padd-15">
          <h1>ACCIONES</h1>
        </div>
      </div>
      <div class="row">
        <div class="select-cat padd-15">
          <a href="sitios.php">
            <div class="select-cat-inner">
              <div class="icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <h4>Sitios Turisticos</h4>
            </div>
          </a>
        </div>
        <div class="select-cat padd-15">
          <a href="usuarios.php">
            <div class="select-cat-inner">
              <div class="icon">
                <i class="fa-solid fa-user"></i>
              </div>
              <h4>Usuarios</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="boton">
        <a href="../PHP/cerrar_sesion.php" class="btn"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a>
      </div>
    </div>
  </section> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
  <script src="../JS/admin.js"></script> 
</body>
</html>