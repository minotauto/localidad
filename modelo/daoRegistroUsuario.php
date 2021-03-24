<?php
include_once 'claseConexion.php';
include_once 'claseRegistroUsuario.php';
include_once 'claseInquietudes.php';

class daoRegistroUsuario {
    
    public static function ingresarDato($p) {
        $con=new claseConexion();
        $sql="INSERT INTO `usuario`(`idUsuario`, `nombre`, `celular`, `email`, `password`, `privilegio`) "
                . "VALUES ('','".$p->getNombre()."','".$p->getCelular()."','".$p->getEmail()."','".$p->getPassword()."','2')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
    public static function  listarUsuario(){
        $con=new claseConexion();
        $sql="SELECT `idUsuario`, `nombre`, `celular`, `email`, `password`, `fecha_creacion`, `privilegio` FROM `usuario` WHERE 1";
        $cont=$con->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont;
    }
    public static function buscarPorReferencia ($ref){
        $con=new claseConexion();
        $sql="SELECT * FROM `usuario` WHERE idUsuario ='$ref'";
        $cont=$con ->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont[0];
    }
    
     public static function eliminarUsuario($ref){
        $con= new claseConexion();
        $sql="DELETE FROM `usuario` WHERE idUsuario='".$ref."'";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
     }
    
    public static function editardato ($p){
        $con = new claseConexion();
        $sql = "UPDATE `usuario` SET "
                . "`idUsuario`='".$p->getIdUsuario()."',"
                . "`nombre`='".$p->getNombre()."',"
                . "`celular`='".$p->getCelular()."',"
                . "`email`='".$p->getEmail()."',"
                . "`password`='".$p->getPassword()."',"
                . "`fecha_creacion`='0',"
                . "`privilegio`='".$p->getPrivilegio()."',"
                . "`foto`='0',"
                . "`verificacion`='0',"
                . "`modo`='0' "
                . "WHERE idUsuario='".$p->getIdUsuario()."'";
    }
    
    public static function ingresarInquietud($p){
        $con = new claseConexion();
        $sql="INSERT INTO `inquietudes`(`Id`, `nombre`, `correo`, `asunto`, `mensaje`) VALUES ('','".$p->getNombre()."','".$p->getCorreo()."','".$p->getAsunto()."','".$p->getMensaje()."')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion(); 
    }
    
    public static function listarPeticion(){
      $con = new claseConexion();
      $sql="SELECT `Id`, `nombre`, `correo`, `asunto`, `mensaje` FROM `inquietudes` WHERE 1";
      $cont=$con->ejecutarConsulta($sql);
      $con->cerrarConexion();
      return $cont;
    }
    
    public static function eliminarPeticion($ref){
        $con = new claseConexion();
        $sql = "DELETE FROM `inquietudes` WHERE id='".$ref."'";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
}
