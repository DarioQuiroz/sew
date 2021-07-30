<?php 
session_start();

require_once "scripts.php"; ?>


<?php
include "db.php";



if (empty($_POST['name3']))
  $files = get_usuarios();

 else 
 $files = search_usuarios($_POST['name3']);




?>



<html>

<head>

  <title>Editar Usuarios</title>
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
          
        <li class="nav-item"><a class="nav-link" href="registrar_user_sew.html">Capturar Usuario</a></li>
        <li class="nav-item"><a class="nav-link" href='files_id_sew.php'>Ver Archivos</a></li>
          <li class="nav-item"><a class="nav-link" href="cerrarsesion.php">Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
  </nav>


<div class="col-4" style="margin-bottom: 5%;"></div>

  <section class="container">
    <div class="col-4 "></div>
    <h1>Editar Usuarios</h1>

  
  </section>


  

                  </div>
    <?php if (count($files) > 0) : ?>

   
      <section class="container">
     
    <form method="post" class="form-signin col-6">
                    <input type="search" name="name3" class="form-control" placeholder="Buscar" required>
                    <div class="space-10"></div>
                    <button class="add-to-cart" name="btnAccion" value="todo" type="submit" > <em>Buscar</em></button>

                  </form>
        <div class="table-responsive">
          <table style="align-items: center;" class="table">
            <thead>
              <tr>
                
                  <th scope="col">
                <h2>Nombre</h2>
                 
                </th> 
                <th scope="col">
                <h2>Correo</h2>
                 
                </th>
                <th scope="col">
                <h2>Clave
                </h2>
                 
                </th>
             
                
                <th scope="col"></th>
                <th scope="col"></th>
             
                </th>
              </tr>
            </thead>
            <?php foreach ($files as $f) : ?>
              <tr>
                <td><?php echo $f->nombre; ?></td>
               
                <td><?php echo $f->usuario; ?></td>
                <td><?php echo $f->clave; ?></td>

             
                <td><a href="edit_usuarios_sew.php?id=<?php echo $f->id; ?>">Modificar</a></td>
    <td>              <?php  
  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='eliminar_usuario_sew.php?id=".$f->id."''>"?>Borrar Usuario</a> </th>
    </td>
               
              
               
              </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </section>
      <?php else : ?>
    <h4>No se encontraron resultados con esta busquedad</h4>
    <?php endif; ?>

   
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





  <footer class="footer text-muted bg-light">
    <div class="container">
      <span>© </span>
      <ul class="list-inline mb-0 float-right">
      </ul>
    </div>
  </footer>
</body>

</html>