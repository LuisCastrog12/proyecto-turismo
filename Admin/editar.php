<?php
  require '../PHP/ConexionBD.php';  //LLAMAMOS LA CONEXION 

  $db = new Database();
  $con = $db->conectar();
  $id = $_GET['id'];

 //REALIZAMOS LA CONSULTA 

  $query = $con->prepare("SELECT * FROM sitios_turisticos where id=$id");
  $query->execute();
  $lugares = $query->fetch(PDO::FETCH_ASSOC);
  if($lugares['visitado'] == 1){  //SI EN VISTADO ES 1 SE MUESTRA
    $visitado = 'Si';
  }else{
    $visitado = 'No';    //SI EN VISTADO ES DIFERENTE DE 1 NO SE MUESTRA
  }
  if($lugares['alojamiento'] == 1){   //SI EN ALOJAMIENTO ES 1 SE MUESTRA
    $alojamiento = 'Si';
  }else{
    $alojamiento = 'No';  //SI EN ALOJAMIENTO ES DIFERENTE DE 1 NO SE MUESTRA
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

<!-- TABLA PARA EDITAR LUGARES -->

  <div class="center">
    <h1>EDITAR LUGAR</h1>
    <form action="../PHP/guardar.php" method="POST" autocomplete="off">
    <input type="hidden" id="id" name="id" value="<?php echo $id;?>">    <!--Captramos el id -->
      <div class="txt-field">
        <input type="text" id="Nombre" name="Nombre" required value="<?php echo $lugares['nombre'];?>">
        <span></span>
        <label for="Nombre">Nombre</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Precio" name="Precio" required value="<?php echo $lugares['precio'];?>">
        <span></span>
        <label for="Precio">Precio</label>
      </div>
      <div class="txt-field">
        <input type="text" id="Descripcion" name="Descripcion" value="<?php echo $lugares['descripcion'];?>">
        <span></span>
        <label for="Descripcion">Descripcion</label>
      </div>
      <div class="txt-field">
        <input type="text" maxlength="2" minlength="2" id="Visitado" name="Visitado" required value="<?php echo $visitado;?>">
        <span></span>
        <label for="Visitado">Visitado (si o no)</label>
      </div>
      <div class="txt-field">
        <input type="text" maxlength="2" minlength="2" id="Alojamiento" name="Alojamiento" required value="<?php echo $alojamiento;?>">
        <span></span>
        <label for="Alojamiento">Alojamiento (si o no)</label>
      </div>
      <input type="submit" value="Actualizar">
      <div class="volver">
        <a href="sitios.php"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </form>
  </div>
</body>
</html>