<?php         // CONEXION A LA BASE DE DATOS 
 require 'conexionBD.php';
 $db = new Database ();
  $con = $db ->conectar();
  $buscar = $_POST['buscar'];
  $query = $con -> prepare("SELECT * FROM sitios_turisticos WHERE nombre='$buscar'"); //CONSULTA
  $query->execute();
  $sitios = $query->fetchAll(PDO::FETCH_ASSOC);
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
  <title>Sitios -GLUP IN</title>
</head>
<body>
  <section id="sitiosT">
    <div class="container padd-50">
      <div class="title">
        <h1>Sitios Turisticos - GLUP IN</h1>
      </div>
      <div class="tabla">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descripción</th>
              <th>Mas Visitiado</th>
              <th>Alojamiento en cabañas</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($sitios as $row){
              if($row['visitado'] == 1){
                $visitado = 'Si';
              }else{
                $visitado = 'No';
              }
              if($row['alojamiento'] == 1){
                $alojamiento = 'Si';
              }else{
                $alojamiento = 'No';
              } $contador++;
              ?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td>$ <?php echo number_format($row['precio'], 0, '.', ','); ?></td>
                <td><?php echo $row['descripcion'];?></td>
                <td><?php echo $visitado;?></td>
                <td><?php echo $alojamiento;?></td>
                <td><a href="../Admin/editar.php?id=<?php echo $row['id'];?>" class="editar"><i class="fa-solid fa-pen"></i></a></td>
                <td><a href="eliminar.php?id=<?php echo $row['id'];?>" class="eliminar"><i class="fa-solid fa-trash-can"></i></a></td>
              </tr> 
            <?php }
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
        <a class ="btn" href="../Admin/sitios.php"><i class="fa-solid fa-rotate-left"></i> Volver</a>
      </div>
    </div>
  </section>
</body>
</html>