<?php
//   verificar usuaio que ingreso
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
    <link rel="stylesheet" href="../CSS/categorias.css">
    <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
    </script>
    <link rel="icon" href="../IMG/icono.png">
    <title>Categorias</title>
</head>
<body>
       <!-- header para categorias con sesion iniciada-->
        <!-- Bloque header -->

    <nav>
        <a href="../index.php" class="logo">GLUP IN</a>
    
    <ul>
        <li><a href="ofertas.php">Precios y ofertas</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="perfil.php?id=<?php echo $id?>"><i class="fa-solid fa-user"></i> Ver Perfil</a></li>
        <li><a href="../PHP/cerrar_sesion.php"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a></li>
    </ul>

    <label id="icon">
        <i class=" fas fa-bars"></i>
    </label>
    </nav>  