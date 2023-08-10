<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/GLUP-IN/img/icono.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="icon" href="IMG/icono.png">
  <title>GLUP IN</title>
  
</head>
<body>
 <!-- header para el index.php con sesion no iniciada -->
    
<header class="bloque header">
        <div class="centrar nav" id="fondo">
            <div class="logo">
                <h2><i class="fas fa-hiking"></i>GLUP IN</h2>
            </div>

            <div class="search-box">
                <input type="text" id="buscar" placeholder="Buscar destino..." autocomplete="off">
                <button type="submit" id="btn"><span class="fa fa-search"></span></button>
                <div id="resultados" class="resultados-ocultos"></div>
            </div>
            <div class="enlaces">
                <ul>
                    <li><a href="Secundario/ofertas.php">Precios y ofertas</a></li>
                    <li><a href="Secundario/categorias.php" target="_blank">Categorias</a></li>
                    <li><a href="Secundario/login.php">Iniciar sesión</a></li>
                </ul>

                <label for="toggle-menu" id="icon">
                    <i class=" fas fa-bars"></i>
                </label>
            </div>
        </div>

    </header>
</body>
