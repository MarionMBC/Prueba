<?php

class Store
{
   private $idStore;
   private $name;
   private $img;
   private $address;
   private $phone;
   private $workingHours;
   private $products;


   public function __construct($idStore, $name, $img, $address, $phone, $workingHours, $products)
   {
      $this->idStore = $idStore;
      $this->name = $name;
      $this->img = $img;
      $this->address = $address;
      $this->phone = $phone;
      $this->workingHours = $workingHours;
      $this->products = $products;
   }

   /*Obtener todas las tiendas*/
   public static function obtenerTiendas()
   {
      $contenido = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenido, true);
      $arrayTiendas = [];
      foreach ($tiendas as $tienda) {
         $arrayTiendas[] = array(
            "idStore" => $tienda["idStore"],
            "name" => $tienda["name"],
            "img" => $tienda["img"],
            "address" => $tienda["address"],
            "phone" => $tienda["phone"],
            "workingHours" => $tienda["workingHours"],
            "products" => $tienda["products"]
         );
      }
      echo json_encode($arrayTiendas);
   }

   /*Obtener una tienda
   * @param $idStore
    * @return Store
   */
   public static function obtenerTienda($idStore)
   {
      $contenido = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenido, true);
      foreach ($tiendas as $tienda) {
         if ($tienda["idStore"] == $idStore) {
            echo json_encode($tienda);
            return true;
         }
      }
      return false;
   }

   /*Actualizar una tienda
   * @return store
   */
   public function actualizarTienda()
   {
      $contenido = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenido, true);
      foreach ($tiendas as $key => $tienda) {
         if ($tienda["idStore"] == $this->idStore) {
            $tiendas[$key]["name"] = $this->name;
            $tiendas[$key]["img"] = $this->img;
            $tiendas[$key]["address"] = $this->address;
            $tiendas[$key]["phone"] = $this->phone;
            $tiendas[$key]["workingHours"] = $this->workingHours;
            $tiendas[$key]["products"] = $this->products;
            file_put_contents("../../data/jsons/tiendas/stores.json", json_encode($tiendas));
            echo json_encode($tiendas);
         }
      }
      return false;
   }

   /*Añadir una tienda*/
   public function anadirTienda()
   {
      $contenido = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenido, true);
      $store = array(
         "idStore" => $this->idStore,
         "name" => $this->name,
         "img" => $this->img,
         "address" => $this->address,
         "phone" => $this->phone,
         "workingHours" => $this->workingHours,
         "products" => $this->products
      );
      array_push($tiendas, $store);
      file_put_contents("../../data/jsons/tiendas/stores.json", json_encode($tiendas));
      return true;
   }

   /*Eliminar una tienda
   * @param $idStore
    * @return bool
   */
   public static function eliminarTienda($idStore)
   {
      $contenido = file_get_contents("../../data/jsons/tiendas/stores.json");
      $tiendas = json_decode($contenido, true);
      $arrayTiendas = array();
      foreach ($tiendas as $key => $tienda) {
         if ($tienda["idStore"] != $idStore) {
            array_push($arrayTiendas, $tienda);
            file_put_contents("../../data/jsons/tiendas/stores.json", json_encode($arrayTiendas));
            return true;
         }
      }
      return false;
   }


}