<?php
  session_start();  //DESTRUIMOS SESION Y NOS REDIRRECIONA
  session_destroy();
  echo '<script>window.location.href="../index.php"</script>';
?>