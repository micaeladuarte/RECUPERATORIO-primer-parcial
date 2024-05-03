<?php
 
 include_once "Producto.php";
 include_once "Tienda.php";
 include_once "VentaTienda.php";
 include_once "Item.php";


 /**--23-- Crear  una colección con un mínimo de 4 productos, uno de los productos 
  * tiene como código de barra 0001 y cantidad stock 3.
  */

  $objProd1= new Producto(0001, "levis", "rosa", "m", "remera", 24);
  $objProd2= new Producto(0002, "taverniti", "azul", "m", "jean", 10);
  $objProd3= new Producto(0003, "adidas", "negro", "s", "pulover", 30);
  $objProd4= new Producto(0004, "nike", "verde", "xl", "pantalon", 16);

  $colObjProductos= [$objProd1, $objProd2, $objProd3, $objProd4];

/**
 * --24--Crear  un objeto Tienda con la colección de productos creada en la respuesta anterior.
 */

 $objTienda= new Tienda("flores", "Av. Siempre Viva 123", 1234567, $colObjProductos, []);


 /**--25--
  * Crear un arreglo asociativo con la información de 3 de los productos que se encuentran en la colección 
  *creada en 1. Uno de los elementos del arreglo asociativo es:  codigoBarra=0001 y  cantidad=5
  *código barra, marca, color, talle, descripción y cantidad en stock.
  */

  $productosVenta = [
    ['codigoBarra' => 0001, 'cantidad' => 5],
    ['codigoBarra' => 0002, 'cantidad' => 10],
    ['codigoBarra' => 0003, 'cantidad' => 30]
];


/**--26--
 * Invocar al método  realizarVenta con el arreglo asociativo creado en 3
 */

 $objTienda->realizarVenta($productosVenta);




 /**
  * --27-- Realizar un echo del objeto Tienda creado en la respuesta anterior
  */
  echo "Datos de la tienda:". $objTienda;




?>