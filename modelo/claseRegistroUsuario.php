<?php


class claseRegistroUsuario {
    
    private $idUsuario;
    private $nombre;
    private $celular;
    private $email;
    private $password;
    private $privilegio;
    
    
     function __construct() {
        
    }
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getPrivilegio() {
        return $this->privilegio;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setPrivilegio($privilegio) {
        $this->privilegio = $privilegio;
    }

}
