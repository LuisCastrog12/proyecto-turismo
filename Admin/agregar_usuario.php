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
  <!-- TABLA PARA AREGAR USUARIOS DESDE ADMIN -->
  <div class="center">
    <h1>AGREGAR USUARIO</h1>
    <form action="../PHP/guardar_usuario.php" method="POST" autocomplete="off">
      <div class="txt-field">
        <input type="text" id="Nombre" name="Nombre" required>
        <span></span>
        <label for="Nombre">Nombre</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Correo" name="Correo" required>
        <span></span>
        <label for="Correo">Correo</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Usuario" name="Usuario">
        <span></span>
        <label for="Usuario">Usuario</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Contraseña" name="Contraseña" required>
        <span></span>
        <label for="Contraseña">Contraseña</label>
      </div>

      <input type="submit" value="Agregar">
      <div class="volver">
        <a href="usuarios.php"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </form>
  </div>
</body>
</html>