<?php

class Login
{

  function __construct()
  {

  }

  public function get_Login($usuario,$contrasena){
    $objConexion = new Conexion();
    $conexion = $objConexion->get_Conexion();

    $query="SELECT USER,PASSWORD,TYPE FROM Ebenedent.USUARIOS WHERE USER = :_USUARIO AND PASSWORD = :_CONTRASENA";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':_USUARIO',$usuario,PDO::PARAM_STR); // la funcion bindParam evita las inyecciones sql
    $stmt->bindParam(':_CONTRASENA',$contrasena,PDO::PARAM_STR);

    if (isset($stmt)) {
      if ($stmt->execute()){ //execute sirve para ejecutar la consulta
        $data = $stmt->fetch();
        return $data;
      }else{
        echo  "no se puede ejecutar la consulta";
        return null;
      }
    }else{
      echo "CONSULTA VACIA ";
    }
  }
}



 ?>
