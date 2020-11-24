<?php

include("BaseDatos.php");

$id=$_GET["id"];
 

$transaccion=new BaseDatos();

$consultaSQL="DELETE FROM locion WHERE idUsuario='$id'";

$transaccion->eliminarDatos($consultaSQL);

?>