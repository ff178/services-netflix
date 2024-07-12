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
class Cuenta extends Model {

    protected static $table = "Cuenta";
    private $idCuenta;
    private $idTipoCuenta;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $estado;

    private $has_one = array(
        'TipoCuenta' => array(
            'class' => 'TipoCuenta',
            'join_as' => 'idTipoCuenta',
            'join_with' => 'idTipoCuenta',
            'join_table' => 'Cuenta'
        )
    );

    private $has_many = array(
        'Usuarios' => array(
            'class' => 'Usuario',
            'my_key' => 'idCuenta',
            'other_key' => 'idUsuario',
            'join_other_as' => 'idCuenta',
            'join_self_as' => 'idCuenta',
            'join_table' => 'Usuario'
        )
    );

    function __construct($idCuenta = null, $idTipoCuenta = null, $nombre = null, $apellido = null, $email = null, $password = null, $estado = null) {
        $this->idCuenta = $idCuenta;
        $this->idTipoCuenta = $idTipoCuenta;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = $password;
        $this->estado = $estado;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }

    function getId() {
        return $this->idCuenta;
    }

    function getIdTipoCuenta() {
        return $this->idTipoCuenta;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($idCuenta) {
        $this->idCuenta = $idCuenta;
    }

    function setIdTipoCuenta($idTipoCuenta) {
        $this->idTipoCuenta = $idTipoCuenta;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    public static function getInstance(Cuenta $cuenta = null){
       if($cuenta != null){

        $instance = new Cuenta(
            null,
            $cuenta->geIdTipoCuenta(),
            $cuenta->getNombre(),
            $cuenta->getApellido(),
            $cuenta->getEmail(),
            $cuenta->getPassword(),
            $cuenta->getEstado()
            );
        return $instance;
    } else{
        return new Cuenta();
    }
    }


}
