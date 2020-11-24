<?php

class BaseDatos {

    public $usuarioBD="root";
    public $passwordBD="";


public function __construct(){}


public function conectarBD (){

    try{
 $infoBD="mysql:host=localhost;dbname=tiendaweb1";
 $conexionBD= new PDO ($infoBD,$this->usuarioBD, $this->passwordBD); 
 return($conexionBD);
    }
    catch(PDOException $error){
        echo($error->getMessage());
    }

}

public function agregarDatos($consultaSQL){

$conexionBD=$this->conectarBD();

$consultaAgregarDatos=$conexionBD->prepare($consultaSQL);

$resultado=$consultaAgregarDatos->execute();

if ($resultado){
    echo("Registro agregado con exito!");
}
 else{
     echo("Error al agregar el registro");
 }     

}

public function buscarDatos($consultaSQL){
      
    $conexionBD=$this->conectarBD(); 

    $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    $consultaBuscarDatos->execute();

    return($consultaBuscarDatos->fetchAll());

}

public function eliminarDatos($consultaSQL){

    $conexionBD=$this->conectarBD();

    $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
    
    $resultado=$consultaEliminarDatos->execute();
    
    if ($resultado){
        echo("Registro eliminado con exito!");
    }
     else{
         echo("Error al eliminar el registro");
     }  

}

public function editarDatos($consultaSQL){

    $conexionBD=$this->conectarBD();

    $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
    
    $resultado=$consultaEditarDatos->execute();
    
    if ($resultado){
        echo("Registro editado con exito!");
    }
     else{
         echo("Error al editar el registro");
     }  

}

}





?>