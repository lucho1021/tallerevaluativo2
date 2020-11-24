<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="body2">
    
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="tiendaweb1.php">Venta de Lociones</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="listaLociones.php">Lista de Lociones</a>
      </li>
    </ul>
  </div>
</nav>

</header>

<?php

include("BaseDatos.php");

$consultaSQL="SELECT * FROM locion WHERE 1";

$transaccion=new BaseDatos();
$locion=$transaccion->buscarDatos($consultaSQL);




?>

<div class="container">
 <div class="row row-cols-1 row-cols-md-3 mt-3">
  <?php foreach($locion as $lociones): ?>

  <div class="col mb-4">
   <div class="card">
      <img src="<?php echo($lociones["foto"]) ?>" class="card-img-top" alt="imagen">
      <div class="card-body">
        <h5 class="card-title"> <?php echo($lociones["locion"]) ?> </h5>
        <p class="card-text"> <?php echo($lociones["descripcion"]) ?> </p>
        <p class="card-text"> <?php echo($lociones["precio"]) ?> </p>
        <a href="eliminarRegistro.php?id=<?php echo($lociones["idUsuario"]) ?>" class="btn btn-dark" >Eliminar</a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editar<?php  echo($lociones["idUsuario"]) ?>">Editar
        </button>
      </div>
      <div class="modal fade" id="editar<?php  echo($lociones["idUsuario"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Editar locion</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
               <form action="editarLocion.php?id=<?php echo($lociones["idUsuario"]) ?>" method="POST">
                <div class="form-group">
                  <label>Locion</label>
                  <input type="text" class="form-control" name="locionEditar" value="<?php echo($lociones["locion"]) ?>">
                </div>
                <div class="form-group">
                  <label>Precio</label>
                  <input type="text" class="form-control" name="precio" value="<?php echo($lociones["precio"]) ?>">
                </div>
                <div class="form-group">
                   <label>descripcion</label>
                   <textarea class="form-control" name="descripcionEditar"><?php  echo($lociones["descripcion"]) ?></textarea>
                </div>
                <div>
                   <button type="submit" class="btn btn-danger" name="botonEditar">Editar</button>
                </div>
               </form>
             </div>
          </div>
        </div>
      </div>
   </div>
  </div>

  <?php endforeach ?>
 </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>