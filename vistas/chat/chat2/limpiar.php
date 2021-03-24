<?php
include_once '../../../modelo/claseConexion.php';
switch($_GET['a']){
        case 'limpiar':
            $con= new claseConexion();
        $sql="DELETE FROM `chat`";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
        
        header('Location: index.php');
        
        
        break;
        
}


