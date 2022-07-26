<?php

class Product
{
   private $idProduct;
   private $name;
   private $description;
   private $price;
   private $img;
   private $category;
   private $subCategory;
   private $type;
   private $genderCategory;
   private $quantity;
   private $brand;

   /*Construct*/
   public function __construct($idProduct, $name, $description, $price, $img, $category, $subCategory, $type, $genderCategory, $quantity, $brand)
   {
      $this->idProduct = $idProduct;
      $this->name = $name;
      $this->description = $description;
      $this->price = $price;
      $this->img = $img;
      $this->category = $category;
      $this->subCategory = $subCategory;
      $this->type = $type;
      $this->genderCategory = $genderCategory;
      $this->quantity = $quantity;
      $this->brand = $brand;
   }

   /*Obtener todos los productos*/
   public static function obtenerProductos()
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = [];
      foreach ($productos as $producto) {
         $arrayProductos = array(
            'idProduct' => $producto['idProduct'],
            'name' => $producto['name'],
            'description' => $producto['description'],
            'price' => $producto['price'],
            'img' => $producto['img'],
            'brand' => $producto['brand']
         );
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener producto por id*/
   public static function obtenerProducto($idProduct)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      foreach ($productos as $producto) {
         if ($producto['idProduct'] == $idProduct) {
            echo json_encode($producto);
            return true;
         }
      }
      return false;
   }

   /*Obtener productos por categoria (tienda)*/
   public static function obtenerProductosPorCategoria($category)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['category'] == $category) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por subcategoria*/
   public static function obtenerProductosPorSubCategoriaPorGenero($subCategory, $genderCategory)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['subCategory'] == $subCategory && $producto['genderCategory'] == $genderCategory) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }
   

   /*Obtener productos por tipo*/
   public static function obtenerProductosPorTipo($type)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['type'] == $type) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por genero*/
   public static function obtenerProductosPorGenero($genderCategory)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['genderCategory'] == $genderCategory) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por marca*/
   public static function obtenerProductosPorMarca($brand)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['brand'] == $brand) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por precio*/
   public static function obtenerProductosPorPrecio($price)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['price'] == $price) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por un rango de precio determinado*/
   /*
    * @param $priceRange: array con los valores de inicio y fin del rango
    * @return array de productos
    * */
   public static function obtenerProductosPorPrecioRango($mayor, $menor)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['price'] >= $menor && $producto['price'] <= $mayor) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por color
   * @param $color: string con el color del producto
    * @return array de productos
    * */
   public static function obtenerProductosPorColor($color)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['color'] == $color) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por talla
   * @param $size: string con la talla del producto
    * @return array de productos
    * */
   public static function obtenerProductosPorTalla($size)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['size'] == $size) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Obtener productos por rango de talla
   * @param $sizeRange: array con los valores de inicio y fin del rango
    * @return array de productos
    * */
   public static function obtenerProductosPorTallaRango($minor, $mayor)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['size'] >= $minor && $producto['size'] <= $mayor) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
   }

   /*Agregar producto
   * @param $product: objeto con los datos del producto
    * @return array de productos
    * */
   public function agregarProducto()
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $producto = array(
         "idProduct" => $this->idProduct,
         "name" => $this->name,
         "description" => $this->description,
         "price" => $this->price,
         "img" => $this->img,
         "category" => $this->category,
         "subCategory" => $this->subCategory,
         "type" => $this->type,
         "genderCategory" => $this->genderCategory,
         "quantity" => $this->quantity,
         "brand" => $this->brand,
      );
      array_push($productos, $producto);
      $json = json_encode($productos);
      file_put_contents("../../data/jsons/productos/products.json", $json);
   }

   /*Eliminar producto
   * @param $id: id del producto a eliminar
    * @return array de productos
    * */
   public static function eliminarProducto($idProduct)
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['idProduct'] != $idProduct) {
            array_push($arrayProductos, $producto);
         }
      }
      $json = json_encode($arrayProductos);
      file_put_contents("../../data/jsons/productos/products.json", $json);
   }

   /*Modificar producto
   * @param $id: id del producto a modificar
   * @param $product: objeto con los datos del producto
    * @return array de productos
    * */
   public function modificarProducto()
   {
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $products = json_decode($contenido, true);
      foreach ($products as $key => $producto) {
         if ($producto['idProduct'] == $this->idProduct) {
            $products[$key]['name'] = $this->name;
            $products[$key]['description'] = $this->description;
            $products[$key]['price'] = $this->price;
            $products[$key]['img'] = $this->img;
            $products[$key]['category'] = $this->category;
            $products[$key]['subCategory'] = $this->subCategory;
            $products[$key]['type'] = $this->type;
            $products[$key]['genderCategory'] = $this->genderCategory;
            $products[$key]['quantity'] = $this->quantity;
            $products[$key]['brand'] = $this->brand;
            return true;
         }
      }
      return false;
   }

   public static function obtenerProductosPorCategoriaGeneroSubCategoria($category, $genderCategory, $subCategory){
      $contenido = file_get_contents("../../data/jsons/productos/products.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['category'] == $category && $producto['genderCategory'] == $genderCategory && $producto['subCategory'] == $subCategory) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
      
   }

   public static function obtenerProductosPorCategoriaPorGenero($category, $genderCategory){
      $contenido = file_get_contents("../../data/jsons/productos/subcategorias.json");
      $productos = json_decode($contenido, true);
      $arrayProductos = array();
      foreach ($productos as $producto) {
         if ($producto['category'] == $category && $producto['genderCategory'] == $genderCategory) {
            array_push($arrayProductos, $producto);
         }
      }
      echo json_encode($arrayProductos);
      

   }
      
      

}

?>