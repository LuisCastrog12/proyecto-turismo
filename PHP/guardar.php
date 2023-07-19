<?php
  require 'ConexionBD.php';

  $db = new Database();
  $con = $db->conectar();   //guardar lugares

  if(isset($_POST['id'])){
    $id = $_POST['id'];
    $Nombre = $_POST['Nombre'];
    $Precio = $_POST['Precio'];
    $Descripcion = $_POST['Descripcion'];
    $Visitado = $_POST['Visitado'];
    $Visitado = strtoupper($Visitado);
    $Alojamiento = $_POST['Alojamiento'];
    $Alojamiento = strtoupper($Alojamiento);

    if($Visitado == "SI"){
      $Visit = 1;
    }else {
      $Visit = 0;
    }
    if($Alojamiento == "SI"){
      $Alojamient = 1;
    }else{
      $Alojamient = 0;
    }
    $query = $con->prepare("UPDATE sitios_turisticos SET nombre=?, precio=?, descripcion=?, visitado=?, alojamiento=? where id=?");
    $resultado = $query->execute(array($Nombre, $Precio, $Descripcion, $Visit, $Alojamient, $id));
    if($resultado){
      echo '<script>window.location.href="../Admin/sitios.php"</script>';
    }
  }else{
    $Nombre = $_POST['Nombre'];
    $Precio = $_POST['Precio'];
    $Descripcion = $_POST['Descripcion'];
    $Visitado = $_POST['Visitado'];
    $Visitado = strtoupper($Visitado);
    $Alojamiento = $_POST['Alojamiento'];
    $Alojamiento = strtoupper($Alojamiento);

    if($Visitado == "SI"){
      $Visit = 1;
    }else{
      $Visit = 0;
    }
    if($Alojamiento == "SI"){
      $Alojamient = 1;
    }else{
      $Alojamient = 0;
    }
    $query = $con->prepare("INSERT INTO sitios_turisticos (nombre, precio, descripcion, visitado, alojamiento) values(:nom, :pre, :descr, :visit, :aloj)");
    $resultado = $query->execute(array('nom'=>$Nombre, 'pre'=>$Precio, 'descr'=>$Descripcion, 'visit'=>$Visit, 'aloj'=>$Alojamient));
    if($resultado){
      echo '<script>window.location.href="../Admin/sitios.php"</script>';
    }
  }
?>