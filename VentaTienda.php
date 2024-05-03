<?php
/**
 * En la clase Venta: Se registra la 
 * fecha, el cliente, número de factura, tipo de comprobante (Tipo A o B) y la colección de ítems vendidos.
 */

 class VentaTienda {
    // Atributos
    private $fecha;
    private $cliente;
    private $numeroFactura;
    private $tipoComprobante;
    private $colObjItems;

    // Constructor
    public function __construct($fecha, $cliente, $numeroFactura, $tipoComprobante, $colObjItems) {
        $this->fecha = $fecha;
        $this->cliente = $cliente;
        $this->numeroFactura = $numeroFactura;
        $this->tipoComprobante = $tipoComprobante;
        $this->colObjItems = $colObjItems;
    }

    // Métodos de acceso GET y SET
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    //_________________________________________

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }
    //_________________________________________

    public function getNumeroFactura() {
        return $this->numeroFactura;
    }

    public function setNumeroFactura($numeroFactura) {
        $this->numeroFactura = $numeroFactura;
    }
    //_________________________________________

    public function getTipoComprobante() {
        return $this->tipoComprobante;
    }

    public function setTipoComprobante($tipoComprobante) {
        $this->tipoComprobante = $tipoComprobante;
    }
    //_________________________________________

    public function getColObjItems() {
        return $this->colObjItems;
    }

    public function setColObjItems($colObjItems) {
        $this->colObjItems = $colObjItems;
    }



    /**Se pide un método incorporarProducto que recibe por parámetro un producto y 
     * la cantidad que desea registrarse en la venta. Si es posible realizar la venta, teniendo en cuenta 
     * la cantidad solicitada y la cantidad en stock del producto, se crea un item y se incorpora a la 
     * colección de items de la venta.
Recordar que debe actualizarse el stock del producto si la venta se realiza con éxito.
El método debe retornar el objeto de productos modificado si se pudo realizar la venta o null en caso contrario.
     * USAR ACTUALIZAR STOCK
     */

     public function incorporarProductos($objProducto, $cantidadAVender){
        $unObjProducto= null;
        $stockDisp= $objProducto->getCantidadStock();
        if($stockDisp >= $cantidadAVender){
            $unItem= new Item($cantidadAVender, $objProducto);
            $colItemsVenta= $this->getColObjItems();
            array_push($colItemsVenta, $unItem);
            $unObjProducto= $objProducto->actualizarStock($cantidadAVender);

        }
        return $unObjProducto;
     }
}


?>