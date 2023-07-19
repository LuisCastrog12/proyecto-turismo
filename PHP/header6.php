<?php
//verificar que el usuario haya ingreasado
    $id=$_SESSION['usuario'];  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/ofertas.css">
    <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../IMG/icono.png">
    <title>Precios y ofertas</title>
</head>
<body>
            <!-- header ofertas con sesion iniciada -->
    <!-- Bloque header -->

    <header>

    <a href="../index.php" class="logo">GLUP IN</a>

        <nav class="navbar">
            <ul>
                <li><a href="ofertas.php">Precios y ofertas</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="perfil.php?id=<?php echo $id?>"><i class="fa-solid fa-user"></i> Ver Perfil</a></li>
                <li><a href="../PHP/cerrar_sesion.php"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>

    </header>