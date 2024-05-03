<?php
/**
 * En la clase ítem: Se registra la cantidad vendida y la referencia al producto.
 */
class Item {
    // Atributos
    private $cantidadVendida;
    private $objProducto;

    // Constructor
    public function __construct($cantidadVendida, $objProducto) {
        $this->cantidadVendida = $cantidadVendida;
        $this->objProducto = $objProducto;
    }

    // Métodos de acceso GET y SET
    public function getCantidadVendida() {
        return $this->cantidadVendida;
    }

    public function setCantidadVendida($cantidadVendida) {
        $this->cantidadVendida = $cantidadVendida;
    }
    //___________________________________________________

    public function getObjProducto() {
        return $this->objProducto;
    }

    public function setObjProducto($objProducto) {
        $this->objProducto = $objProducto;
    }


    public function __toString()
    {
        $cad= "Cantidad vendida: ". $this->getCantidadVendida(). "\n".
              "Producto: ". $this->getObjProducto();
        return $cad;
    }
}



?>