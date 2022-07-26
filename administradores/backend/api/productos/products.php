<?php
header("Content-Type: application/json");
include_once("../../class/productos/class-product.php");
switch ($_SERVER['REQUEST_METHOD']) {
   case 'GET':
      if (isset($_GET['idProduct'])) {
         Product::obtenerProducto($_GET['idProduct']);
      } else if (isset($_GET['idCategory']) && isset($_GET['genderCategory'])) {
         Product::obtenerProductosPorCategoriaPorGenero($_GET['idCategory'], $_GET['genderCategory']);
      }else if (isset($_GET['idCategory'])) {
         Product::obtenerProductosPorCategoria($_GET['idCategory']);
      } else if (isset($_GET['idSubCategory']) && isset($_GET['genderCategory'])) {
         Product::obtenerProductosPorSubCategoriaPorGenero($_GET['idSubCategory'], $_GET['genderCategory']);
      } else if (isset($_GET['type'])){
         Product::obtenerProductosPorTipo($_GET['type']);
      } else if (isset($_GET['genderCategory'])) {
         Product::obtenerProductosPorGenero($_GET['genderCategory']);
      } else if (isset($_GET['brand'])) {
         Product::obtenerProductosPorMarca($_GET['brand']);
      } else if (isset($_GET['color'])) {
         Product::obtenerProductosPorColor($_GET['color']);
      } else if (isset($_GET['size'])) {
         Product::obtenerProductosPorTalla($_GET['size']);
      } else if (isset($_GET['price'])) {
         Product::obtenerProductosPorPrecio($_GET['price']);
      } else if (isset($_GET['minor']) && isset($_GET['mayor']) && !(isset($_GET['sizeRange'])) ) {
         Product::obtenerProductosPorPrecioRango($_GET['minor'], $_GET['mayor']);
      } else if (isset($_GET['minor']) && isset($_GET['mayor']) && isset($_GET['sizeRange'])) {
         Product::obtenerProductosPorTallaRango($_GET['minor'], $_GET['mayor']);
      } else {
         Product::obtenerProductos();
      }
      break;
   case 'POST':
      $product = json_decode(file_get_contents('php://input'), true);
      $object = new Product($product['idProduct'], $product['name'], $product['description'], $product['price'], $product['img'], $product['category'], $product['subCategory'], $product['type'], $product['genderCategory'], $product['quantity'], $product['brand']);
      $object->agregarProducto();
      break;
   case 'PUT':
      $product = json_decode(file_get_contents('php://input'), true);
      $object = new Product($product['idProduct'], $product['name'], $product['description'], $product['price'], $product['img'], $product['category'], $product['subCategory'], $product['type'], $product['genderCategory'], $product['quantity'], $product['brand']);
      $object->modificarProducto($product['idProduct']);
      break;

   case 'DELETE':
      Product::eliminarProducto($_GET['idProduct']);
      break;
}
?>