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
class TipoCuenta extends Model {

    protected static $table = "TipoCuenta";
    private $idTipoCuenta;
    private $descripcion;

    private $has_many = array(
       'Cuentas' => array(
           'class' => 'Cuenta',
           'my_key' => 'idTipoCuenta',
           'other_key' => 'idCuenta',
           'join_other_as' => 'idTipoCuenta',
           'join_self_as' => 'idTipoCuenta',
           'join_table' => 'Cuenta'
       )
    );

    function __construct($idTipoCuenta = null, $descripcion = null) {
        $this->idTipoCuenta = $idTipoCuenta;
        $this->descripcion = $descripcion;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }

    function getId() {
        return $this->idTipoCuenta;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($idTipoCuenta) {
        $this->idTipoCuenta = $idTipoCuenta;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}
