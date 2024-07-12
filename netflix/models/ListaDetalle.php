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
class ListaDetalle extends Model {

    protected static $table = "ListaDetalle";
    private $idListaDetalle;
    private $idListaReproduccion;
    private $idPelicula;
    private $idSerie;

    private $has_one = array(
        'Serie' => array(
            'class' => 'Serie',
            'join_as' => 'idSerie',
            'join_with' => 'idSerie',
            'join_table' => 'ListaDetalle'
        ),
        'Pelicula' => array(
            'class' => 'Pelicula',
            'join_as' => 'idPelicula',
            'join_with' => 'idPelicula',
            'join_table' => 'ListaDetalle'
        ),
        'ListaReproduccion' => array(
            'class' => 'ListaReproduccion',
            'join_as' => 'idListaReproduccion',
            'join_with' => 'idListaReproduccion',
            'join_table' => 'ListaDetalle'
        )

    );

    function __construct($idListaDetalle = null, $idListaReproduccion = null, $idPelicula = null, $idSerie = null) {
        $this->idListaDetalle = $idListaDetalle;
        $this->idListaReproduccion = $idListaReproduccion;
        $this->idPelicula = $idPelicula;
        $this->idSerie = $idSerie;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idListaDetalle;
    }

    function getIdListaReproduccion() {
        return $this->idListaReproduccion;
    }

    function getIdPelicula() {
        return $this->idPelicula;
    }

    function getIdSerie() {
        return $this->idSerie;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idListaDetalle) {
        $this->idListaDetalle = $idListaDetalle;
    }

    function setIdListaReproduccion($idListaReproduccion) {
        $this->idListaReproduccion = $idListaReproduccion;
    }

    function setIdPelicula($idPelicula) {
        $this->idPelicula = $idPelicula;
    }

    function setIdSerie($idSerie) {
        $this->idSerie = $idSerie;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }
    
    public static function getInstance(ListaDetalle $lista=null){
        if($lista != null){
            $instance = new ListaDetalle(
                    null,
                    $lista->getIdListaReproduccion(),
                    $lista->getIdPelicula(),
                    $lista->getIdSerie()
                    );
            return $instance;
        }else{
            return new ListaDetalle();
        }
    }


}
