<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
class ProductController extends Controller
{
   public function allProduct(){
    $products = Productos::all();
    foreach($products as $product){
            echo "<h1>".$product->codigo_producto."</h1>";
            echo "<p>".$product->descripcion_producto."</p>";
            echo "<p>".$product->precio_unidad."</p>";
            echo "<hr>";
        }

      die();
   }

   public function productForCode(){
      $products = Productos::where('descripcion_producto', 'ACEITE VEGETAL LOS SILOS 900CC')->get();
      foreach($products as $product){
              echo "<h1>".$product->codigo_producto."</h1>";
              echo "<p>".$product->descripcion_producto."</p>";
              echo "<p>".$product->precio_unidad."</p>";
              echo "<hr>";
          }
  
        die();
     }
}
