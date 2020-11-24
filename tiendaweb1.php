<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Lociones</title>
</head>
<body class="body1">
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

<main>

<div class="container">
       <form class= "mt-5" action="registroLocion.php" method="POST">
          <div class="row">
              <div class="col">
                 <input type="text" class="form-control" placeholder="Locion" name="locion" >
              </div>
              <div class="col">
                 <input type="text" class="form-control" placeholder="Marca" name="marca">
              </div>
         </div>
               <div class="mt-5">
                  <input type="text" class="form-control" placeholder="Precio" name="precio">
              </div>
          <div  class="mt-5">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion" name="descripcion"></textarea>
          </div>
          <div class="row mt-3">
               <div class="col">
                   <label class="font-weight-bold">Foto:</label>
                   <input type="text" class="form-control" placeholder="Foto URL" name="foto">
               </div>    
          </div>
          <div class="mt-5" class="col-5">

            <button type="submit" value="submit" class="btn btn-secondary btn-lg btn-blo" name="botonRegistrar">Registrar</button>
          </div>
     </form>
</div>
      

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>