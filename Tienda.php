<?php
/**
 * En la clase Tienda se registra 
 * nombre, dirección, teléfono, la colección de productos y la colección de ventas realizadas.
 */

 class Tienda {
    // Atributos
    private $nombre;
    private $direccion;
    private $telefono;
    private $colObjProductos;
    private $colObjVentas;

    // Constructor
    public function __construct($nombre, $direccion, $telefono) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->colObjProductos = array();
        $this->colObjVentas = array();
    }

    // Métodos de acceso GET y SET
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    //__________________________________

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    //__________________________________

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    //__________________________________

    public function getColObjProductos() {
        return $this->colObjProductos;
    }

    public function setColObjProductos($colObjProductos) {
        $this->colObjProductos = $colObjProductos;
    }
    //__________________________________

    public function getColObjVentas() {
        return $this->colObjVentas;
    }

    public function setColObjVentas($colObjVentas) {
        $this->colObjVentas = $colObjVentas;
    }

    //__________________________________

    /**--20--Implementar el método buscarProducto que dado un código de barra por parámetro, 
     * retorna la el subíndice donde se encuentra un objeto producto con ese código de barra. 
     * En caso de no encontrar el código de barra en la colección de productos retornar
     */

     public function buscarProducto($codBarra){
        $indice= -1;
        $encuentra=false;
        $colObjProductos= $this->getColObjProductos();
        $i=0;
        while($i < count($colObjProductos) && !$encuentra){
            $unProducto= $colObjProductos[$i];
            $codUnProducto= $unProducto->getCodigoBarra();
            if($codBarra == $codUnProducto){
                $encuentra=true;
                $indice= $i;
            }
            $i++;
        }
        return $indice;
    }

    /**--22--Implementar el método realizarVenta que recibe por parámetro con arreglos asociativos que contienen la 
     * siguiente información: 
     * código barra correspondiente a un producto y cantidad de ejemplares del producto  
     * que desea venderse.  
    El procedimiento debe buscar los productos según el código de barra, verificar el stock disponible y 
    realizar el registro de la venta en caso de ser posible. 
    El procedimiento debe retornar un objeto Venta con los ítems correspondientes a aquellos productos 
    que se pudo vender. 
     * 
     */

     public function realizarVenta($colInfoVenta){
        $unaVenta=null;
        $indiceProducto=-1;
        foreach ($colInfoVenta as $unItem) {
            $indiceProducto=$this->buscarProducto($unItem['codigo barra']);

            if($indiceProducto!= -1){
            $productoEncontrado = $this->colObjProductos[$indiceProducto];


            if ($productoEncontrado->getCantidadStock() >= $unItem['cantidad']) {
                $itemVenta = new Item($unItem['cantidad'], $productoEncontrado);
                if ($unaVenta == null) {
                    $unaVenta = new VentaTienda(date("d, m, y"),"consumidor final","b", count($this->getColObjVentas()+1); );
                }
                

                
        }
    }
    }
    // Retornar la venta realizada (o null si no se pudo realizar ninguna venta)
    return $unaVenta;







    //__________________________________________________________
    //Metodo complementario para mostrar colecciones en toString
    public function retornarCadenaCol($coleccion){
        $cadena= "";
        foreach ($coleccion as $unElementoCol) {
            $cadena= $cadena. " ". $unElementoCol. " \n";
        }
        return $cadena;
    }

    // nombre, dirección, teléfono, la colección de productos y la colección de ventas realizadas.
    //Metodo toString
    public function __toString()
    {
        $cad= "Nombre de la tienda: ". $this->getNombre(). "\n".
              "Direccion:". $this->getDireccion(). "\n".
              "Telefono:". $this->getTelefono(). "\n".
              "Coleccion de productos: \n". $this->retornarCadenaCol($this->getColObjProductos()). "\n".
              "Coleccion de Ventas realizadas: \n". $this->retornarCadenaCol($this->getColObjVentas());
        return $cad;
    }
 }



?>