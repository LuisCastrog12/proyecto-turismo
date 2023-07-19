<?php
  require 'ConexionBD.php'; //LLAMOS LA CONEXION A LA BASE DE DATOS

  $db = new Database();
  $con = $db->conectar();
  $id = $_GET['id'];

// REALIZAMOS LA CONSULTA DE ELIMINAR

  $query = $con->prepare("DELETE FROM usuarios where id=?");
  if($query->execute([$id])){
    echo '<script>window.location.href="../Admin/usuarios.php"</script>';  //SE ELIMINA Y NOS REDIRRECIONA
  } else{
    echo '<script>console.log("Error al eliminar el usuario")</script>'; //CONFIRMA ERROR AL ELIMINAR
  }
?>