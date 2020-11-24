<?php

 include ("BaseDatos.php");

  if (isset($_POST["botonRegistrar"]))
  {
     $locion=$_POST["locion"];
     $marca=$_POST["marca"];
     $precio=$_POST["precio"];
     $descripcion=$_POST["descripcion"];
     $foto=$_POST["foto"];
     
      $transaccion= new BaseDatos();
     
      $consultaSQL="INSERT INTO locion(locion, marca, precio, descripcion, foto) VALUES ('$locion','$marca','$precio','$descripcion','$foto')";

      $transaccion->agregarDatos($consultaSQL);

  }

  ?>