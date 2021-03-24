<?php
    require_once 'claseConexion.php';
    require_once 'claseLogin.php';
    
    class daoClaseLogin {
        public static function buscarPorUsuario($nom){
                $con=new claseConexion();
                $sql="select * from usuario where nombre='$nom'";
                $cont=$con->ejecutarConsulta($sql);
                $con->cerrarConexion();
                return $cont[0];//se envia un solo registro
            }
    }
