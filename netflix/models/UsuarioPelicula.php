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
class UsuarioPelicula extends Model {

    protected static $table = "UsuarioPelicula";
    private $idUsuario;
    private $idPelicula;
    private $puntuacion;
    private $reseña;
    private $minActual;

    private $has_one = array(
        'Pelicula' => array(
            'class' => 'Pelicula',
            'join_as' => 'idPelicula',
            'join_with' => 'idPelicula',
            'join_table' => 'UsuarioPelicula'
        ),
        'Usuario' => array(
            'class' => 'Usuario',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'UsuarioPelicula'
        )
    );

    function __construct($idUsuario = null, $idPelicula = null, $puntuacion = null, $reseña = null, $minActual = null) {
        $this->idUsuario = $idUsuario;
        $this->idPelicula = $idPelicula;
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

    function getIdPelicula() {
        return $this->idPelicula;
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

    function setIdPelicula($idPelicula) {
        $this->idPelicula = $idPelicula;
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
