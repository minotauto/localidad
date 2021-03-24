<?php
include_once 'claseConexion.php';
include_once 'claseRegistroProducto.php';

class daoRegistroProducto {
    
    public static function ingresardato($p){
        $con=new claseConexion();
        $sql="INSERT INTO `producto`(`Id`, `tienda`, `dueño`, `celular`, `direccion`, `producto`, `descripcion`, `foto`, `precio`) "
                . "VALUES ('',"
                . "'".$p->getTienda()."',"
                . "'".$p->getUsuario()."',"
                . "'".$p->getCelular()."',"
                . "'".$p->getDireccion()."',"
                . "'".$p->getProducto()."',"
                . "'".$p->getDescripcion()."',"
                . "'',"
                . "'".$p->getPrecio()."')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
        return $cont;
    }
    public static function validardato($p){
        $con=new claseConexion();
        $sql="INSERT INTO `validarproducto`(`Id`, `tienda`, `dueño`, `celular`, `direccion`, `producto`, `descripcion`, `foto`, `precio`) "
                . "VALUES ('',"
                . "'".$p->getTienda()."',"
                . "'".$p->getUsuario()."',"
                . "'".$p->getCelular()."',"
                . "'".$p->getDireccion()."',"
                . "'".$p->getProducto()."',"
                . "'".$p->getDescripcion()."',"
                . "'',"
                . "'".$p->getPrecio()."')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
        return $cont;
    }
    public static function listarProducto(){
        $con=new claseConexion();
        $sql="SELECT `Id`, `tienda`, `dueño`, `celular`, `direccion`, `producto`, `descripcion`, `foto`, `precio` FROM `producto` WHERE 1";
        $cont=$con->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont;
    }
    public static function listarProductoPendientes(){
        $con=new claseConexion();
        $sql="SELECT `Id`, `tienda`, `dueño`, `celular`, `direccion`, `producto`, `descripcion`, `foto`, `precio` FROM `validarproducto` WHERE 1";
        $cont=$con->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont;
    }
    public static function buscarPorReferencia($ref){
        $con= new claseConexion();
        $sql="SELECT * FROM `validarproducto` WHERE id ='$ref'";
        $cont=$con ->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont[0];
    }
    public static function eliminarProductoPendiente($ref){
        $con= new claseConexion();
        $sql="DELETE FROM `validarproducto` WHERE Id='".$ref."'";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
    public static function eliminarProducto($ref){
        $con=new claseConexion();
        $sql="DELETE FROM `producto` WHERE id='".$ref."'";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
}
