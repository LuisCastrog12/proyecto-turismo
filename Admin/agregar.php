<?php
  session_start();
  $id = $_SESSION['admin'];
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

 <!-- TABLA PARA AREGAR USUARIOS DESDE ADMIN -->

<body>
  <div class="center">
    <h1>AGREGAR LUGAR</h1>
    <form action="../PHP/guardar.php" method="POST" autocomplete="off">
      <div class="txt-field">
        <input type="text" id="Nombre" name="Nombre" required>
        <span></span>
        <label for="Nombre">Nombre</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Precio" name="Precio" required>
        <span></span>
        <label for="Precio">Precio</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Descripcion" name="Descripcion">
        <span></span>
        <label for="Descripcion">Descripcion</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Visitado" name="Visitado" required>
        <span></span>
        <label for="Visitado">Visitado (si o no)</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Alojamiento" name="Alojamiento" required>
        <span></span>
        <label for="Alojamiento">Alojamiento (si o no)</label>
      </div>

      <input type="submit" value="Agregar">
      <div class="volver">
        <a href="Admin.php?id=<?php echo $id?>"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </form>
  </div>
</body>
</html>