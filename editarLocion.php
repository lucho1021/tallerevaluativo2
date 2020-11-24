<?php

include("BaseDatos.php");

if(isset($_POST["botonEditar"])){

   $locion=$_POST["locionEditar"];
   $descripcion=$_POST["descripcionEditar"];
   $precio=$_POST["precio"];

   $id=$_GET["id"];
   
   $transaccion=new BaseDatos();

   $consultaSQL="UPDATE locion SET locion='$locion',descripcion='$descripcion',precio='$precio' WHERE idUsuario='$id'";

   $transaccion->editarDatos($consultaSQL);

    header("location:listaLociones.php");

}





?>