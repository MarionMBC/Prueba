<?php

class Usuario
{
   private $idDealer;
   private $firstName;
   private $lastName;
   private $dni;
   private $birthDate;
   private $img;
   private $email;
   private $password;
   private $direction;
   private $phone;
   private $gender;
   private $orders;
   private $delivered;
   private $bankAccounts;

   function __construct($idDealer, $firstName, $lastName, $dni, $birthDate, $img, $email, $password, $direction, $phone, $gender, $orders, $delivered, $bankAccounts)
   {
      $this->idDealer = $idDealer;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->dni = $dni;
      $this->birthDate = $birthDate;
      $this->img = $img;
      $this->email = $email;
      $this->password = $password;
      $this->direction = $direction;
      $this->phone = $phone;
      $this->gender = $gender;
      $this->orders = $orders;
      $this->delivered = $delivered;
      $this->bankAccounts = $bankAccounts;
   }


   //CRUD
   public function guardarUsuario()
   {
      $contrasena = sha1($this->password);
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $usuarios[] = array(
         "idDealer" => $this->idDealer,
         "firstName" => $this->firstName,
         "lastName" => $this->lastName,
         "dni" => $this->dni,
         "birthDate" => $this->birthDate,
         "img" => $this->img,
         "email" => $this->email,
         "password" => $contrasena,
         "direction" => $this->direction,
         "phone" => $this->phone,
         "gender" => $this->gender,
         "orders"=> $this->orders,
         "delivered"=>$this->delivered,
         "bankAccounts"=> $this->bankAccounts
      );
      $archivo = fopen("../../data/jsons/motoristas/dealers.json", "w");
      fwrite($archivo, json_encode($usuarios));
      fclose($archivo);
   }

   public static function obtenerUsuarios()
   {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      echo $contenidoArchivo;
   }

   public static function verificarUsuario($user, $password)
   {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
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
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      foreach ($usuarios as $usuario) {
         if ($usuario["email"] == $user) {
            return $usuario;
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

   public function actualizarUsuario($indice)
   {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $usuario = array(
         "nombre" => $this->nombre,
         "apellido" => $this->apellido,
         "fechaNacimiento" => $this->fechaNacimiento,
         "pais" => $this->pais
      );

      $usuarios[$indice] = $usuario;
      $archivo = fopen("../../data/jsons/motoristas/dealers.json", "w");
      fwrite($archivo, json_encode($usuarios));
      fclose($archivo);
   }

   public static function eliminarUsuario($indice)
   {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      array_splice($usuarios, $indice, 1);
      $archivo = fopen("../../data/jsons/motoristas/dealers.json", "w");
      fwrite($archivo, json_encode($usuarios));
      fclose($archivo);
   }

   /*Agregar una nueva orden a un usuario*/
   public static function agregarOrden($idOrder, $idDealer) {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $arregloUsuarios = array();
      foreach ($usuarios as $usuario) {
         if ($usuario["idDealer"] == $idDealer) {
            $usuario["orders"][] = intval($idOrder);
         }
         $arregloUsuarios[] = $usuario;
      }

      $archivo = fopen("../../data/jsons/motoristas/dealers.json", "w");
      fwrite($archivo, json_encode($arregloUsuarios));
      fclose($archivo);
   }

   /*Eliminar una orden a un usuario y agregarla a delivered*/
   public static function eliminarOrden($idOrder, $idDealer) {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $arregloUsuarios = array();
      foreach ($usuarios as $usuario) {
         if ($usuario["idDealer"] == $idDealer) {
            $usuario["delivered"][] = intval($idOrder);
            $usuario["orders"] = array_diff($usuario["orders"], array($idOrder));
         }
         $arregloUsuarios[] = $usuario;
      }

      $archivo = fopen("../../data/jsons/motoristas/dealers.json", "w");
      fwrite($archivo, json_encode($arregloUsuarios));
      fclose($archivo);
   }

   /*Cambiar contraseña*/
   public static function cambiarContrasena($idDealer, $password) {
      $contenidoArchivo = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $usuarios = json_decode($contenidoArchivo, true);
      $arregloUsuarios = array();
      foreach ($usuarios as $usuario) {
         if ($usuario["idDealer"] == $idDealer) {
            $usuario["password"] = sha1($password);
         }
         $arregloUsuarios[] = $usuario;
      }

      $archivo = fopen("../../data/jsons/motoristas/dealers.json", "w");
      fwrite($archivo, json_encode($arregloUsuarios));
      fclose($archivo);
   }

   /*Ver orders y delivered y sustituir id por tienda*/
   public static function verOrdenes ($idDealer)
   {
      $contenidoMotoristas = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $motoristas = json_decode($contenidoMotoristas, true);
      $contenidoTiendas = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenidoTiendas, true);
      $arregloOrdersDelivered = null;
      $arregloTiendas = null;
      foreach ($motoristas as $motorista) {
         if ($motorista["idDealer"] == $idDealer) {
            $arregloOrdersDelivered = $motorista["orders"];
         }
      }
      foreach ($arregloOrdersDelivered as $idOrder) {
         foreach ($tiendas as $tienda) {
            foreach ($tienda["products"] as $product) {
               if ($product == $idOrder) {
                  $arregloTiendas[] = $tienda;
               }
            }
         }
      }
      echo json_encode($arregloTiendas);

   }

   /*Ver entregas*/
   public static function verEntregas ($idDealer)
   {
      $contenidoMotoristas = file_get_contents("../../data/jsons/motoristas/dealers.json");
      $motoristas = json_decode($contenidoMotoristas, true);
      $contenidoTiendas = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenidoTiendas, true);
      $arregloOrdersDelivered = null;
      $arregloTiendas = array();
      foreach ($motoristas as $motorista) {
         if ($motorista["idDealer"] == $idDealer) {
            $arregloOrdersDelivered = $motorista["delivered"];
         }
      }
      foreach ($arregloOrdersDelivered as $idOrder) {
         foreach ($tiendas as $tienda) {
            foreach ($tienda["products"] as $product) {
               if ($product == $idOrder) {
                  $arregloTiendas[] = $tienda;
               }
            }
         }
      }
      echo json_encode($arregloTiendas);
   }

}