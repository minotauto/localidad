<?php


class claseInquietudes {
    private $id;
    private $nombre;
    private $correo;
    private $asunto;
    private $mensaje;
    
    function __construct() {
        ;
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getAsunto() {
        return $this->asunto;
    }

    function getMensaje() {
        return $this->mensaje;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }


}
