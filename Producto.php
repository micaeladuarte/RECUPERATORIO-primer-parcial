<?php
/**En la clase Producto: Se registra la siguiente información: 
 * código barra, marca, color, talle, descripción y cantidad en stock. 
 * 
 */

 class Producto {
    // Atributos
    private $codigoBarra;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantidadStock;

    // Constructor
    public function __construct($codigoBarra, $marca, $color, $talle, $descripcion, $cantidadStock) {
        $this->codigoBarra = $codigoBarra;
        $this->marca = $marca;
        $this->color = $color;
        $this->talle = $talle;
        $this->descripcion = $descripcion;
        $this->cantidadStock = $cantidadStock;
    }

    // Métodos de acceso GET y SET
    public function getCodigoBarra() {
        return $this->codigoBarra;
    }

    public function setCodigoBarra($codigoBarra) {
        $this->codigoBarra = $codigoBarra;
    }
    //____________________________________________

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }
    //____________________________________________

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
    //____________________________________________

    public function getTalle() {
        return $this->talle;
    }

    public function setTalle($talle) {
        $this->talle = $talle;
    }
    //____________________________________________

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    //____________________________________________

    public function getCantidadStock() {
        return $this->cantidadStock;
    }

    public function setCantidadStock($cantidadStock) {
        $this->cantidadStock = $cantidadStock;
    }
    //____________________________________________


    /**
     * Se debe definir el método actualizarStock que recibe por parámetro una cantidad y 
     * actualiza!!!! el valor del stock del producto según corresponda. Si el valor recibido por parámetro es >0, 
     * entonces se incrementa el stock y si el valor es <0 se decrementa el stock del producto.
     */

     public function actualizarStock($cantStock){
        $stock= $this->getCantidadStock();
        if($cantStock>0){
            $this->setCantidadStock($stock + $cantStock);
        } else{
            $this->setCantidadStock($stock - $cantStock);
        }
     }










   // código barra, marca, color, talle, descripción y cantidad en stock. 
 

    public function __toString()
    {
      $cadena= "-----Datos del producto------\n\n".
               "Codigo barra: ". $this->getCodigoBarra(). "\n".
               "Marca: ". $this->getMarca(). "\n".
               "Color: ". $this->getColor(). "\n".
               "Talle: ". $this->getTalle(). "\n".
               "Descripcion: ". $this->getDescripcion(). "\n".
               "Cantidad de stock: " . $this->getCantidadStock();
      
      return $cadena;

    }




}



?>