<?php
  require 'PHP/ConexionBD.php';
  $db = new Database();
  $con = $db->conectar();

  /* Todos los lugares */
  $query = $con->prepare("SELECT * FROM sitios_turisticos");
  $query->execute();
  $lugares = $query->fetchAll(PDO::FETCH_ASSOC);

  /* Visitado */
  $query = $con->prepare("SELECT * FROM sitios_turisticos where visitado=1");
  $query->execute();
  $visitado = $query->fetchAll(PDO::FETCH_ASSOC);

  /* Alojamiento*/
  $query = $con->prepare("SELECT * FROM sitios_turisticos where alojamiento=1");
  $query->execute();
  $alojamiento = $query->fetchAll(PDO::FETCH_ASSOC);

  session_start();
  if(isset($_SESSION['usuario'])){
    require 'PHP/header2.php';
  } else{                         //header personalizado dependiendo si inicio o no sesion 
    require 'PHP/header1.php';
  }

?>

    
    <!--SEGUNDO BLOQUE-->
    <div class="bloque-cartas servicios">
        <div class="centrar">
            <h4 class="texto-servicios">DISFRUTA DE ESTOS LUGARES MÁGICOS <br> PARA TI</h4><br>
        </div>
        <div class="centrar contenedores">
          <?php foreach($lugares as $row){?>
          <!-- INICIO -->
          <div class="contenidos">
            <?php 
              $id = $row['id'];
              $imagen = "IMG/imagen-caja$id.jpg";
              if(!file_exists($imagen)){
                $imagen = "IMG/no-encontrada.jpg";
              }
            ?>
            <img src="<?php echo $imagen;?>" alt="imagen cartagena" class="img-servicios">
            <h5><?php echo $row['nombre']; ?></h5> <br> 
            <p>Tarifa dinámica <br> $ <?php echo number_format($row['precio'], 0, '.', ','); ?></p>
            <input type="submit" name="reserva" value="Reservar" class="boton">
          </div>
        <!-- FIN -->
        <?php }?>
        </div>
    </div>

    <!--TERCER BLOQUE-->
    <div class="contenedor-principal">
        <div class="centrar">
            <h4 class="texto-servicios">LO MÁS VISITADO</h4>
        </div>

        <!-- Swiper -->
        <div class="container centrar">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach($visitado as $row) {
                      $id = $row['id'];
                      $imagen = "IMG/imagen-caja$id.jpg";
                      if(!file_exists($imagen)){
                        $imagen = "IMG/no-encontrada.jpg";
                      }?>
                      <div class="swiper-slide">
                        <img src="<?php echo $imagen;?>" alt="">
                        <div class="card-description">
                          <div class="card-title">
                            <h5><?php echo $row['nombre'];?></h5>
                          </div>
                          <div class="card-text">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis corporis dolores blanditiis consequuntur delectus laudantium.</p>
                          </div>
                          <div class="card-link">
                            <a href="#">Reservar</a>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!--CUARTO BLOQUE-->

    <div class="contenedor-principal">
        <div class="centrar">
            <h4 class="texto-servicios">
                ALOJAMIENTO EN CABAÑAS
            </h4>
        </div>

        <!-- Swiper -->
        <div class="container centrar">
            <!-- BOTOENES DEL SLIDER POR SI SON REQUERIDOS -->
            <div class="swiper-container mySwiper swiper-r">

            <div class="swiper-wrapper">
                    <?php foreach($visitado as $row) {
                      $id = $row['id'];
                      $imagen = "IMG/imagen-caja$id.jpg";
                      if(!file_exists($imagen)){
                        $imagen = "IMG/no-encontrada.jpg";
                      }?>
                      <div class="swiper-slide">
                        <img src="<?php echo $imagen;?>" alt="">
                        <div class="card-description">
                          <div class="card-title">
                            <h5><?php echo $row['nombre'];?></h5>
                          </div>
                          <div class="card-text">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis corporis dolores blanditiis consequuntur delectus laudantium.</p>
                          </div>
                          <div class="card-link">
                            <a href="#">Reservar</a>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                </div>
            </div>
        </div>

    </div>
    </div>

    </div>

            <!-- QUINTO BLOQUE-->

    <footer>
        <!-- <div class="text-f">
             <h3 class="text-footer">GLUP IN</h3>
        </div> -->
                <ul class="footer-menu">
                    <li>
                        <a href="#" target="_blank">¿Quienes somos?</a>
                        <a href="#" target="_blank">Terminos y condiciones</a>
                        <a href="Secundario/contacto.php" id="links" target="_blank">Contacto</a>
                        <a href="#" target="_blank">Politica de privacidad</a>
                    </li>
                </ul>  
                <span class="copyright">&copy;2022 Glup In</span>
    </footer>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>  //libreria  de js para los carruseles
    <script src="JS/index.js"></script>
</body>

</html>