<?php
require_once '../conexion/ClassConexion.php'; // LLAMO MI ARCHIVO QUE GUARDA LA CONEXION
require_once '../model/ClassModelLogin.php'; // LLAMO A MI ARCHIVO QUE GUARDA LA FUNCION DE LOGIN
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { // LA VARIABLÑE SERVER REQUEST_METHOD
    $usuario = $_POST['usuario']; //esta variable almacena el usuario ingresado en el formulario
    $contrasena = md5($_POST['contrasena']); //esta variable almacena la contraseña ingresado en el formulario

    if (is_null($usuario) || is_null($contrasena)) { //evaluo si las variables son nulas con la funcion is_null
      echo "LAS CREDENCIALES NO PUEDEN IR VACIAS";
      die(); //
    }else{
      $objModel = new Login();
      $login = $objModel->get_Login($usuario,$contrasena);

      if ($login['USER'] === $uuario && $login['PASSWORD']=== $contrasena) {
        session_start();
        $_SESSION['USUARIO'] = $usuario;
        $_SESSION['TIPO'] = $login['TYPE'];

        if ($_SESSION['TIPO'] == 1) {
        echo '<meta http-equiv="Refresh" content="0"; url="../view/administrador/index.php" />';
      }elseif ($_SESSION['TIPO'] == 2) {
          echo '<meta http-equiv="Refresh" content="0"; url="../view/paciente/index.php" />';
      }
    }else {
      echo "USUARIO O CONTRASEÑA INCORRECTOS";
      echo '<meta http-equiv="Refresh" content="3"; url="../index.php" />';
    }
    }
  }else{
    echo "EL METODO DE ENVIO NO ES VALIDO";
    die();
  }
 ?>
