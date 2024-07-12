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
class Categoria extends Model {

    protected static $table = "Categoria";
    private $idCategoria;
    private $descripcion;

    private $has_many = array(
        'Peliculas' => array(
            'class' => 'PeliculaCategoria',
            'my_key' => 'idCategoria',
            'other_key' => 'idPelicula',
            'join_other_as' => 'idCategoria',
            'join_self_as' => 'idCategoria',
            'join_table' => 'PeliculaCategoria'
        ),
        'Series' => array(
            'class' => 'SerieCategoria',
            'my_key' => 'idCategoria',
            'other_key' => 'idSerie',
            'join_other_as' => 'idCategoria',
            'join_self_as' => 'idCategoria',
            'join_table' => 'SerieCategoria'
        )
    );

    function __construct($idCategoria = null, $descripcion = null) {
        $this->idCategoria = $idCategoria;
        $this->descripcion = $descripcion;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idCategoria;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setId($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}
