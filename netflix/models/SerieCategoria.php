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
class SerieCategoria extends Model {

    protected static $table = "SerieCategoria";
    private $idSerie;
    private $idCategoria;

    private $has_one = array(
        'Serie' => array(
            'class' => 'Serie',
            'join_as' => 'idSerie',
            'join_with' => 'idSerie',
            'join_table' => 'SerieCategoria'
        ),
        'Categoria' => array(
            'class' => 'Categoria',
            'join_as' => 'idCategoria',
            'join_with' => 'idCategoria',
            'join_table' => 'SerieCategoria'
        )
    );

    function __construct($idSerie = null, $idCategoria = null) {
        $this->idSerie = $idSerie;
        $this->idCategoria = $idCategoria;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idSerie;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idSerie) {
        $this->idSerie = $idSerie;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }



}
