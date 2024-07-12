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
class PeliculaCategoria extends Model {

    protected static $table = "PeliculaCategoria";
    private $idPelicula;
    private $idCategoria;


    private $has_one = array(
        'Pelicula' => array(
            'class' => 'Pelicula',
            'join_as' => 'idPelicula',
            'join_with' => 'idPelicula',
            'join_table' => 'PeliculaCategoria'
        ),
        'Categoria' => array(
            'class' => 'Categoria',
            'join_as' => 'idCategoria',
            'join_with' => 'idCategoria',
            'join_table' => 'PeliculaCategoria'
        )
    );

    function __construct($idPelicula = null, $idCategoria = null) {
        $this->idPelicula = $idPelicula;
        $this->idCategoria = $idCategoria;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idPelicula;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idPelicula) {
        $this->idPelicula = $idPelicula;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }



}
