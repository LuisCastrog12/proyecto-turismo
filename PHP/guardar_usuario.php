<?php
  require 'ConexionBD.php';

  $db = new Database();
  $con = $db->conectar();
  session_start();
  
  if(isset($_POST['id'])){//editar
    $id = $_POST['id'];
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

    $query = $con->prepare("UPDATE usuarios SET nombre_completo=?, correo=?, usuario=?, contrasena=? where id=?");
    $resultado = $query->execute(array($Nombre, $Correo, $Usuario, $Contraseña, $id));
    if($resultado){
      if(isset($_SESSION['admin'])){       //valida si es usuario o admin y le da ruta person...
        $ruta = "../Admin/usuarios.php";
      }else if(isset($_SESSION['usuario'])){
        $ruta = "../Secundario/perfil.php?id=$id";
      }
      echo '<script>window.location.href="'.$ruta.'"</script>';
    }
  }else{//agregando uno nuevo
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

    $query = $con->prepare("INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) values(:nom, :cor, :us, :cont)");
    $resultado = $query->execute(array('nom'=>$Nombre, 'cor'=>$Correo, 'us'=>$Usuario, 'cont'=>$Contraseña));
    if($resultado){
      echo '<script>window.location.href="../Admin/usuarios.php"</script>';
    }
  }  
?>