<?php 

    session_start(); 
 
    $nombre = $_SESSION['admin'];

    if(isset($_SESSION['admin'])){
         include "db.php";

if (empty($_POST['name']))
$files = get_imgs();

else
$files = get_imgs();




?>
<html>

<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <title>Subir Multiples Archivos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>

    @media (max-width: 600px) {
      #busc_prov {
        flex-direction: column;
      }

      #encavezado {
        margin-bottom: 20%;
        display: flex;
        flex: 1 1 0px;
      }

      #busca_prov {
        display: flex;
        flex: 1 1 0px;
        margin-bottom: 35%;
      }
    }

    @media (max-width: 415px) {
      #busc_prov {
        flex-direction: column;
      }

      #encavezado {
        margin-bottom: 30%;
        display: flex;
        flex: 1 1 0px;
      }

      #busca_prov {
        display: flex;
        flex: 1 1 0px;
        margin-bottom: 45%;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light"> 
    <div class="container">
      <a class="navbar-brand" href="/">SEW EURODRIVE</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
        </ul>

        <ul class="navbar-nav">
          
        <li class="nav-item"><a class="nav-link" href="ver_usuarios_sew.php">Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href='files_id_sew.php'>Ver Archivos</a></li>
          <li class="nav-item"><a class="nav-link" href="cerrarsesion.php">Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="container">
    <div class="col-md-8 "></div>
    <h1>
          <?php echo 'Bienvenido '.$nombre.' a los Archivos '; ?>
  </h1>

  </section>


  <section class="container">
    <button class="button-disponibilidad"><a href="form_sew.php">Agregar más Archivos</a></button>
    <div class="col-4" style="margin-bottom: 3%;"></div>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        </div>
      </div>
    </div>
    <div class="col-4" style="margin-bottom: 3%;"></div>


    <?php if (count($files) > 0) : ?>
      <div class="container">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
             
                <th scope="col">
                  <form method="post" class="form-signin col-12">
                    <input type="search" name="name" class="form-control" placeholder="Parte del nombre" required>
                    <div class="space-10"></div>
                    <button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="    margin-top: 5%; background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Buscar archivos</button>
                  </form>
                </th>
                <th scope="col" style="display: table-cell; vertical-align: middle;">
                <form method="post" class="form-signin col-12">
                <a href="files_fecha.php" class="btn btn-sm vervacantes btn-block" style="margin-top: 5%; background-color: blue; color: white;"> Ordenar por fecha</a>
               
                </form></th>
                <th scope="col"></th>
              
                <th scope="col" style="display: table-cell; vertical-align: middle;">
               
                </th>
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->src; ?></td>
                <td><?php echo $f->created_at; ?></td>
                <td> 
                  
                 <i class="fa fa-file-pdf-o"></i></i>
                
                
               <a href="./download.php?id=<?php echo $f->id; ?>">Descargar</a></td>
                <td><a href="./delete.php?id=<?php echo $f->id; ?>">Eliminar</a></td>
              
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>
  </section>

    
</body>
</html>

  <?php 
} else{

  
  ?>
  <script type="text/javascript">
alert("¡Favor de verificar los datos!");
window.location.href='../index.php';
</script>
 <?php

}

?>















