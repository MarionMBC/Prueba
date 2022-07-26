<?php

class Usuario
{
  private $firstname;
  private $lastname;
  private $email;
  private $password;
  private $gender;
  private $birthday;

  function __construct(
    $firstname,
    $lastname,
    $email,
    $password,
    $gender,
    $birthday
  ) {
    $this->$firstname=$firstname;
    $this->$lastname=$lastname;
    $this->$email=$email;
    $this->$password=$password;
    $this->$gender=$gender;
    $this->$birthday=$birthday;
  }


  //CRUD
  public function guardarUsuario()
  {
    $contenidoArchivo = file_get_contents("../../data/jsons/clientes/users.json");
    $usuarios = json_decode($contenidoArchivo, true);
    $usuarios[] = array(
      "firstname"=>$this->firstname,
      "lastname"=>$this->lastname,
      "email"=>$this->email,
      "password"=>$this->password,
      "gender"=>$this->gender,
      "birthday"=>$this->birthday
    );
    $archivo = fopen("../../data/jsons/clientes/users.json", "w");
    fwrite($archivo, json_encode($usuarios));
    fclose($archivo);
  }

  public static function obtenerUsuarios()
  {
    $contenidoArchivo = file_get_contents("../../data/jsons/clientes/users.json");
    echo $contenidoArchivo;
  }

  public static function verificarUsuario($user, $password)
  {
    $contenidoArchivo = file_get_contents("../../data/jsons/clientes/users.json");
    $usuarios = json_decode($contenidoArchivo, true);
    foreach ($usuarios as $usuario) {
      if ($usuario["email"] == $user && $usuario["password"] == sha1($password)) {
        return $usuario;
      }
    }
    return null;

  }

  public static function verificarUsuarioCorreo($user)
  {
    $contenidoArchivo = file_get_contents("../../data/jsons/clientes/users.json");
    $usuarios = json_decode($contenidoArchivo, true);
    foreach ($usuarios as $usuario) {
      if ($usuario["email"] == $user) {
        return $usuario;
      }
    }
    return null;
    
  }

  public static function get_credenciales(){
    $archivo = file_get_contents("../../secret/credentials.json");
    $credenciales = json_decode($archivo, true);
    
    echo json_encode($credenciales);
  }

  public function actualizarUsuario($indice)
  {
    $contenidoArchivo = file_get_contents("../../data/jsons/clientes/users.json");
    $usuarios = json_decode($contenidoArchivo, true);
    $usuario = array(
      "nombre" => $this->nombre,
      "apellido" => $this->apellido,
      "fechaNacimiento" => $this->fechaNacimiento,
      "pais" => $this->pais
    );

    $usuarios[$indice] = $usuario;
    $archivo = fopen("../../data/jsons/clientes/users.json", "w");
    fwrite($archivo, json_encode($usuarios));
    fclose($archivo);
  }
  public static function eliminarUsuario($indice)
  {
    $contenidoArchivo = file_get_contents("../../data/jsons/clientes/users.json");
    $usuarios = json_decode($contenidoArchivo, true);
    array_splice($usuarios, $indice, 1);
    $archivo = fopen("../../data/jsons/clientes/users.json", "w");
    fwrite($archivo, json_encode($usuarios));
    fclose($archivo);
  }

  /*Obtener las órdenes de un usuario*/
  public static function obtenerOrdenesUsuario($idUsuario)
  {
     $contenidoArchivoClientes = file_get_contents("../../data/jsons/clientes/users.json");
     $clientes = json_decode($contenidoArchivoClientes, true);
     $contenidoArchivoOrdenes = file_get_contents("../../data/jsons/ordenes/orders.json");
     $ordenes = json_decode($contenidoArchivoOrdenes, true);
     $ordenesUsuario = array();
     foreach ($clientes as $cliente) {
       if ($cliente["id"] == $idUsuario) {
         foreach ($cliente["orders"] as $idOrden) {
           foreach ($ordenes as $orden) {
             if ($orden["id"] == $idOrden) {
               $ordenesUsuario[] = $orden;
             }
           }
         }
       }
     }
     echo json_encode($ordenesUsuario);
     return true;
  }
}