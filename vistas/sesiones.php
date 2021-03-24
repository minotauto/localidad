<?php
require_once '../modelo/claseRegistroUsuario.php';
require_once '../modelo/daoRegistroUsuario.php';
session_start();
$pr = $_SESSION['privilegio'];
$usu = $_SESSION['user'];

if(!isset($usu)){
    header("Location: login.php");
}
error_reporting(0);
$varsesion = $_SESSION['user'];
if($varsesion==NULL || $varsesion = ''){
    echo 'usted no tiene autorizacion';
    die();
}
?>

