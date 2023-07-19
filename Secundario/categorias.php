<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        require '../PHP/header4.php';   //si hay una sesion iniciada se muestra el header 4
    }else{
        require '../PHP/header3.php';
    }

    require '../PHP/ConexionBD.php';
    $db = new Database();
    $con = $db->conectar();

    /* Seccion 1 */
    $query = $con->prepare("SELECT * FROM sitios_turisticos where seccion=1");
    $query->execute();
    $seccion1 = $query->fetchAll(PDO::FETCH_ASSOC);

    /* Seccion 2*/
    $query = $con->prepare("SELECT * FROM sitios_turisticos where seccion=2");
    $query->execute();
    $seccion2 = $query->fetchAll(PDO::FETCH_ASSOC);
    
    /* Seccion 3*/
    $query = $con->prepare("SELECT * FROM sitios_turisticos where seccion=3");
    $query->execute();
    $seccion3 = $query->fetchAll(PDO::FETCH_ASSOC);

?>

    <!-- Segundo bloque -->
     <section class="feature" id="feature">
        <h3 class="heading">Costa Caribe</h3>

        <div class="card-container">
            <?php foreach($seccion1 as $row){
                $id = $row['id'];
                $imagen = "../IMG/imagen-caja$id.jpg";
                if(!file_exists($imagen)){
                  $imagen = "../IMG/no-encontrada.jpg";
                }?>
                <div class="card">
                    <img src="<?php echo $imagen;?>" alt="">
                    <div class="content">
                        <h5 class="title"><?php echo $row['nombre'];?></h5>
                        <p><?php echo $row['descripcion'];?></p>
                        <a href="#"><button class="btn">Reservar</button></a>
                    </div>
                </div>
            <?php }?>

        </div>

     </section>

      <!-- Tercer bloque -->

      <section  class="feature" id="feature">
        <h3 class="heading-2">La amazonia</h3>

        <div class="card-container">
        <?php foreach($seccion2 as $row){
                $id = $row['id'];
                $imagen = "../IMG/imagen-caja$id.jpg";
                if(!file_exists($imagen)){
                  $imagen = "../IMG/no-encontrada.jpg";
                }?>
                <div class="card">
                    <img src="<?php echo $imagen;?>" alt="">
                    <div class="content">
                        <h5 class="title"><?php echo $row['nombre'];?></h5>
                        <p><?php echo $row['descripcion'];?></p>
                        <a href="#"><button class="btn">Reservar</button></a>
                    </div>
                </div>
            <?php }?>
        </div>
      </section>

      <!-- Tercer bloque -->

      <section class="feature" id="feature">
        <h3 class="heading-2">San Andrés y Providencia</h3>

        <div class="card-container">
        <?php foreach($seccion3 as $row){
                $id = $row['id'];
                $imagen = "../IMG/imagen-caja$id.jpg";
                if(!file_exists($imagen)){
                  $imagen = "../IMG/no-encontrada.jpg";
                }?>
                <div class="card">
                    <img src="<?php echo $imagen;?>" alt="">
                    <div class="content">
                        <h5 class="title"><?php echo $row['nombre'];?></h5>
                        <p><?php echo $row['descripcion'];?></p>
                        <a href="#"><button class="btn">Reservar</button></a>
                    </div>
                </div>
            <?php }?>
        </div>
      </section>



        <script src="../JS/categorias.js"></script>

</body>
</html>