<?php

class claseRegistroProducto {
    
    private $idProducto;
    private $tienda;
    private $usuario;
    private $celular;
    private $direccion;
    private $producto;
    private $descripcion;
    private $foto;
    private $precio;
    
    function __construct() {
        ;
    }
    function getIdProducto() {
        return $this->idProducto;
    }

    function getTienda() {
        return $this->tienda;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getCelular() {
        return $this->celular;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getProducto() {
        return $this->producto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFoto() {
        return $this->foto;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setTienda($tienda) {
        $this->tienda = $tienda;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }


    
}
