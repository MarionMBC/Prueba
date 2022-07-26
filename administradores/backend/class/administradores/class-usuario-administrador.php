<?php

class Usuario
{
   private $idAdmin;
   private $firstName;
   private $lastName;
   private $email;
   private $password;
   private $img;
   private $status;
   private $role;
   private $telephone;


   public function __construct($idAdmin, $firstName, $lastName, $email, $password, $img, $status, $role, $telephone)
   {
      $this->idAdmin = $idAdmin;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->password = $password;
      $this->img = $img;
      $this->status = $status;
      $this->role = $role;
      $this->telephone = $telephone;
   }

   /*Obtener un administrador*/
   public static function obtenerUsuarios () {
      $contenido = file_get_contents("../../data/jsons/administradores/administrators.json");
      echo $contenido;
   }

   public static function verificarUsuarioCorreo($email)
   {
      $contenidoArchivo = file_get_contents("../../data/jsons/usuarioes/administrators.json");
      $usuarios = json_decode($contenidoArchivo, true);
      foreach ($usuarios as $usuario) {
         if ($usuario["email"] == $email) {
            return $usuario;
         }
      }
      return null;
   }

   /*Verificar un administrador*/
   public static function verificarUsuario ($email, $password) {
      $contenido = file_get_contents("../../data/jsons/administradores/administrators.json");
      $administradores = json_decode($contenido, true);
      foreach ($administradores as $administrador) {
         if ($administrador['email'] == $email && $administrador['password'] == sha1($password)) {
            $user = array(
               'idAdmin' => $administrador['idAdmin'],
               'firstName' => $administrador['firstName'],
               'lastName' => $administrador['lastName'],
               'email' => $administrador['email'],
               'img' => $administrador['img'],
               'status' => $administrador['status'],
               'role' => $administrador['role'],
               'telephone' => $administrador['telephone']
            );
            return $user;
         }
      }
      return null;
   }

   public static function get_credenciales()
   {
      $archivo = file_get_contents("../../secret/credentials.json");
      $credenciales = json_decode($archivo, true);
      echo json_encode($credenciales);
   }


   /*Guardar un administrador*/
   public function guardarUsuario()
   {
      $contenido = file_get_contents("../../data/jsons/usuarioes/administrators.json");
      $admins = json_decode($contenido, true);
      $admins [] = array(
         "idAdmin" => $this->idAdmin,
         "firstName" => $this->firstName,
         "lastName" => $this->lastName,
         "img" => $this->img,
         "status" => $this->status,
         "role" => $this->role,
         "telephone" => $this->telephone
      );
      $archivo = fopen("../../data/jsons/usuarioes/administrators.json", "w");
      fwrite($archivo, json_encode($admins));
      fclose($archivo);
   }

   /*Actualizar un administrador*/
   public function actualizarUsuario () {
      $contenido = file_get_contents("../../data/jsons/administradores/administrators.json");
      $administradores = json_decode($contenido, true);
      $administradoresActualizados = array();
      foreach ($administradores as $administrador) {
         if ($administrador["idAdmin"] == $this->idAdmin) {
            $administrador["firstName"] = $this->firstName;
            $administrador["lastName"] = $this->lastName;
            $administrador["img"] = $this->img;
            $administrador["status"] = $this->status;
            $administrador["role"] = $this->role;
            $administrador["telephone"] = $this->telephone;
         }
         $usuarioesActualizados [] = $administrador;
      }
      $archivo = fopen("../../data/jsons/usuarioes/administrators.json", "w");
      fwrite($archivo, json_encode($usuarioesActualizados));
      fclose($archivo);
   }



}