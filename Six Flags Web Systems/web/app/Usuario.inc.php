<?php

class Usuario {

    private $IdUsuario;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Pass;
    private $TipoUsuario;
    private $Sexo;
    private $Edad;
    private $Celular;
    private $FechaCreacion;
    private $Estado;

    public function __construct($IdUsuario, $Nombre, $ApellidoPaterno, $ApellidoMaterno, $Pass, $TipoUsuario, $Sexo, $Edad, $Celular, $FechaCreacion, $Estado) {
        $this->IdUsuario = $IdUsuario;
        $this->Nombre = $Nombre;
        $this->ApellidoPaterno = $ApellidoPaterno;
        $this->ApellidoMaterno = $ApellidoMaterno;
        $this->Pass = $Pass;
        $this->TipoUsuario = $TipoUsuario;
        $this->Sexo = $Sexo;
        $this->Edad = $Edad;
        $this->Celular = $Celular;
        $this->FechaCreacion = $FechaCreacion;
        $this->Estado = $Estado;
    }

    //Id
    public function getIdUsuario() {
        return $this->IdUsuario;
    }

    public function setIdUsuario($IdUsuario) {
        $this->IdUsuario = $IdUsuario;
    }

    //Nombre
    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    //ApeP
    public function getApellidoPaterno() {
        return $this->ApellidoPaterno;
    }

    public function setApellidoPaterno($ApellidoPaterno) {
        $this->ApellidoPaterno = $ApellidoPaterno;
    }

    //ApeM
    public function getApellidoMaterno() {
        return $this->ApellidoMaterno;
    }

    public function setApellidoMaterno($ApellidoMaterno) {
        $this->ApellidoMaterno = $ApellidoMaterno;
    }

    //Pass
    public function getPass() {
        return $this->Pass;
    }

    public function setPass($Pass) {
        $this->Pass = $Pass;
    }

    //Tipo
    public function getTipo() {
        return $this->TipoUsuario;
    }

    public function setTipoUsuario($TipoUsuario) {
        $this->TipoUsuario = $TipoUsuario;
    }

    //Sexo
    public function getSexo() {
        return $this->Sexo;
    }

    function setSexo($Sexo) {
        $this->Sexo = $Sexo;
    }

    //Edad
    public function getEdad() {
        return $this->Edad;
    }

    function setEdad($Edad) {
        $this->Edad = $Edad;
    }

    //Celular    
    public function getCelular() {
        return $this->Celular;
    }

    function setCelular($Celular) {
        $this->Celular = $Celular;
    }

    //FechaDeCreacion
    public function getFechaDeCreacion() {
        return $this->FechaCreacion;
    }
    
    function setFechaCreacion($FechaCreacion) {
        $this->FechaCreacion = $FechaCreacion;
    }

    //Estado
    public function getEstado() {
        return $this->Estado;
    }

    function setEstado($Estado) {
        $this->Estado = $Estado;
    }    
}
