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
class ListaReproduccion extends Model {

    protected static $table = "ListaReproduccion";
    private $idListaReproduccion;
    private $idUsuario;


    private $has_one = array(
        'Usuario' => array(
            'class' => 'Usuario',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'ListaReproduccion'
        )
    );

    private $has_many = array(
        'ListasDetalle' => array(
            'class' => 'ListaDetalle',
            'my_key' => 'idListaReproduccion',
            'other_key' => 'idListaDetalle',
            'join_other_as' => 'idListaReproduccion',
            'join_self_as' => 'idListaReproduccion',
            'join_table' => 'ListaDetalle'
        )
    );

    function __construct($idListaReproduccion = null, $idUsuario = null) {
        $this->idListaReproduccion = $idListaReproduccion;
        $this->idUsuario = $idUsuario;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idListaReproduccion;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idListaReproduccion) {
        $this->idListaReproduccion = $idListaReproduccion;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
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




}
