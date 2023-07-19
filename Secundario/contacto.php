<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/51240222b3.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../IMG/icono.png">
    <link rel="stylesheet" href="../CSS/contacto.css">
    <title>Contacto Glup In</title>
</head>
<body>

        <!-- FORMULARIO DE CONTACTO -->

    <form  class="form" action="https://formspree.io/f/mknenzqa" method="post">
        <div class="form-container">
            <h2 class="form-title">Contáctanos</h2>
            <input type="text" class="form-input" placeholder="Nombre:" name="name">
            <input type="email" class="form-input" placeholder="Email:" name="email" required>
            <textarea class="form-input form-input__message" placeholder="Mensaje" name="message" required></textarea>

            <input type="submit" value="Enviar" name="enviar" class="form-cta">
        </div>
    </form>


</body>
</html>