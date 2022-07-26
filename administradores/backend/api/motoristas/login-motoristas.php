<?php
session_start();



header("Content-Type: application/json");
include_once("../../class/motoristas/class-usuario-motorista.php");
switch ($_SERVER['REQUEST_METHOD']) {
    //Guardar
  case 'POST':
    $_POST = json_decode(file_get_contents('php://input'), true);

    $resultado=null;

    if(isset($_POST['user']) && !isset($_POST['password']))
      $resultado = Usuario::verificarUsuarioCorreo($_POST['user']);

    
    if(isset($_POST['user']) && isset($_POST['password']))
      $resultado = Usuario::verificarUsuario($_POST['user'], $_POST['password']);


    if ($resultado) {
      //echo '{"codigo":1, "mensaje":"Usuario encontrado"}';
      $res = array(
        "codigo" => 1,
        "mensaje" => "Usuario encontrado",
        "token" => sha1(uniqid(rand(), true))
      );

      $_SESSION["token"] = $res["token"];

      setcookie("token", $res['token'], time() + (60 * 60 * 24 * 30), "/");
      setcookie("firstName", $resultado["firstName"], time() + (60 * 60 * 24 * 30), "/");
      setcookie("lastName", $resultado["lastName"], time() + (60 * 60 * 24 * 30), "/");
      setcookie("email", $resultado["email"], time() + (60 * 60 * 24 * 30), "/");
      setcookie("img", $resultado["img"], time() + (60 * 60 * 24 * 30), "/");
      setcookie("idDealer", $resultado["idDealer"], time() + (60 * 60 * 24 * 30), "/");

      echo json_encode($res);
    } else {

      setcookie("token", " ", time() - 1, "/");
      setcookie("firstName", " ", time() - 1, "/");
      setcookie("lastName", " ", time() - 1, "/");
      setcookie("email", " ", time() - 1, "/");
      setcookie("img", " ", time() - 1, "/");
      setcookie("idDealer", " ", time() - 1, "/");


      echo '{"codigo":0, "mensaje":"Usuario no encontrado"}';

      if (!isset($_SESSION["token"])) {
        echo '{"error": "No token"}';
        exit;
      }

      if (!isset($_COOKIE["token"])) {
        echo '{"error": "No token"}';
        exit;
      }

      if ($_SESSION["token"] != $_COOKIE["token"]) {
        echo '{"error": "No token"}';
        exit;
      }
    }

    break;
  case 'GET':
    Usuario::get_credenciales();

    break;
}