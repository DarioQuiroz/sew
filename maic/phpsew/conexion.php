<?php
    $servidor = "localhost";
    $usuario = "agrosead_multi_upload";
    $password = "multi_upload";
    $db = "agrosead_multi_upload";
    $conexion = new mysqli($servidor, $usuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $conn = new mysqli("localhost", "agrosead_multi_upload", "multi_upload", "agrosead_multi_upload");

    if (mysqli_connect_errno()) {
    die("No se puede conectar a la base de datos:" . mysqli_connect_error());
    }else{
    
       
    }

?>