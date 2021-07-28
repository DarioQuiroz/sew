<?php 
session_start();
error_reporting();
    include('conexion.php');

  // $nombre = $_POST['nombre'];
   // $password = $_POST['password'];

   $usuario = $_GET['usuario'];
  $password = $_GET['password'];


    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$password'";
    $resultado= $conexion->query($sql) or die ("Error al consultar producto".mysqli_error($conn)); 


    $row = $resultado->fetch_assoc();

    $nombre_usuario=$row['nombre'];
 

    if($row['usuario'] == $usuario && $row['clave'] == $password && $row['tipo'] ==1){
  
           $_SESSION['admin'] = $nombre_usuario;
      header("location:files_id_sew.php");
    }

  else  if($row['usuario'] == $usuario && $row['clave'] == $password && $row['tipo'] ==0){
      $_SESSION['comun'] = $nombre_usuario;
      header("location:Docs_person.php");
       
    }

    else
    { 
      ?>
      <script type="text/javascript">
  alert("¡Los datos que ingresaste no corrrespoonden a ninguna cuenta!");
 window.location.href='../index.php';
  </script>
     <?php
  
    }

?>


