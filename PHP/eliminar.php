<?php
  require 'ConexionBD.php';

  $db = new Database();
  $con = $db->conectar();     //eliminar sitio turistico
  $id = $_GET['id'];

  $query = $con->prepare("DELETE FROM sitios_turisticos where id=?");
  if($query->execute([$id])){
    echo '<script>window.location.href="../Admin/sitios.php"</script>';
  }else{
    echo '<script>console.log("Error al borrar")</script>';
  }
?>