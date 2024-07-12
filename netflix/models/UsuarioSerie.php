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
class UsuarioSerie extends Model {

    protected static $table = "UsuarioSerie";
    private $idUsuario;
    private $idSerie;
    private $puntuacion;
    private $reseña;
    private $minActual;

    private $has_one = array(
        'Serie' => array(
            'class' => 'Serie',
            'join_as' => 'idSerie',
            'join_with' => 'idSerie',
            'join_table' => 'UsuarioSerie'
        ),
        'Usuario' => array(
            'class' => 'Usuario',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'UsuarioSerie'
        )
    );

    function __construct($idUsuario = null, $idSerie = null, $puntuacion = null, $reseña = null, $minActual = null) {
        $this->idUsuario = $idUsuario;
        $this->idSerie = $idSerie;
        $this->puntuacion = $puntuacion;
        $this->reseña = $reseña;
        $this->minActual = $minActual;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idUsuario;
    }

    function getIdSerie() {
        return $this->idSerie;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function getReseña() {
        return $this->reseña;
    }

    function getMinActual() {
        return $this->minActual;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdSerie($idSerie) {
        $this->idSerie = $idSerie;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function setReseña($reseña) {
        $this->reseña = $reseña;
    }

    function setMinActual($minActual) {
        $this->minActual = $minActual;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }




}
