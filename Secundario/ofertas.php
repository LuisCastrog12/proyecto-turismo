<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        require '../PHP/header6.php';
    }else{
        require '../PHP/header5.php';
    }
?>
    <!-- segundo bloque -->

    <section class="home">
        <div class="content">
            <h1 class="text-min">Explora nuevos lugares, <br>la aventura espera.</h1>
        
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Officiis culpa totam quaerat, laboriosam necessitatibus laborum dolore corrupti omnis, 
                in, excepturi natus deserunt quas molestiae odio illo?
            </p>
        </div>

        <div class="form-container">
            <form action="">
                <h3>Buscar destinación</h3>
                <span>Ubicación</span>
                <input type="text" placeholder="Barú Cartagena">
                <span>Miembros invitados</span>
                <input type="number" placeholder="Número de personas">
                <span>Llegada</span>
                <input type="date" placeholder="">
                <span>Partida</span>
                <input type="date">
                <input type="submit" value="Buscar destino">
            </form>

        </div>
    </section>

    <!-- Tercer bloque -->

    <section class="feature" id="feature">
        <h1 class="heading">Ofertas</h1>
        <div class="card-container">
            
            <div class="card">
                <span class="discount">-35%</span>
                <img src="../IMG/imagen-caja1.jpg" alt="">
                <div class="content">
                    <h3 class="title">La Guajira</h3>
                    <p>La Guajira es uno de los departamentos más bellos, 
                        podrás encontrar diferentes paisajes y ecosistemas como desierto, selva y montaña húmeda.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#"><button class="btn">Ver más</button></a>
                </div>
            </div>

            <div class="card">
                <span class="discount">-15%</span>
                <img src="../IMG/imagen-caja2.jpg" alt="">
                <div class="content">
                    <h3 class="title">La Guajira</h3>
                    <p>La Guajira es uno de los departamentos más bellos, 
                        podrás encontrar diferentes paisajes y ecosistemas como desierto, selva y montaña húmeda.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#"><button class="btn">Ver más</button></a>
                </div>
            </div>

            <div class="card">
                <span class="discount">-25%</span>
                <img src="../IMG/imagen-caja5.jpg" alt="">
                <div class="content">
                    <h3 class="title">La Guajira</h3>
                    <p>La Guajira es uno de los departamentos más bellos, 
                        podrás encontrar diferentes paisajes y ecosistemas como desierto, selva y montaña húmeda.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#"><button class="btn">Ver más</button></a>
                </div>
            </div>
        </div>

    </section>

    <!-- Cuarto bloque -->

    <section class="gallery">
        <h1 class="heading-2">Galeria</h1>

        <div class="box-container">
            <div class="box">
                <img src="../IMG/imagen-caja6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>  
            </div>

            <div class="box">
                <img src="../IMG/imagen-caja2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>  
            </div>

            <div class="box">
                <img src="../IMG/imagen-caja3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>  
            </div>

            <div class="box">
                <img src="../IMG/imagen-caja3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>  
            </div>

            <div class="box">
                <img src="../IMG/imagen-caja7.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>  
            </div>

            <div class="box">
                <img src="../IMG/imagen-caja7.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>  
            </div>

        </div>
    </section>
      <!--Quinto bloque-->

      <section class="contact">
        <div class="text">
        <h1 class="heading-3" id="heading">Consultar lugares cercanos</h1>
        </div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31273.
      936859230937!2d-72.93216595980189!3d11.
      534482524949349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
      1!3m3!1m2!1s0x8e8b62ae5191d0d9%3A0xb4b4a0a181b3bbd2!2sRiohacha%2C%20La%20Guajira!5e0!3m2!1ses-
      419!2sco!4v1659684657664!5m2!1ses-419!2sco" width="100%" height="300" style="border:0;
      outline:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </section>
      

      


    <!-- jquey cdn link -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../JS/main.js"></script>

</body>
</html>