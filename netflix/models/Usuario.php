<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author ff
 */
class Usuario extends Model {

    protected static $table = "Usuario";
    private $idCuenta;
    private $idUsuario;
    private $nombre;


    function __construct($idCuenta = null, $idUsuario = null, $nombre = null) {
        $this->idCuenta = $idCuenta;
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getIdCuenta() {
        return $this->idCuenta;
    }

    function getId() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdCuenta($idCuenta) {
        $this->idCuenta = $idCuenta;
    }

    function setId($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}
