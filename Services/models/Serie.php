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
class Serie extends Model {

    protected static $table = "Serie";
    private $idSerie;
    private $titulo;
    private $descripcion;
    private $puntuacion;
    private $fechaEstreno;
    private $reparto;
    private $features;
    private $lenguaje;
    private $activo;

    private $has_many = array(
        'SerieCategorias' => array(
            'class' => 'SerieCategoria',
            'my_key' => 'idSerie',
            'other_key' => 'idCategoria',
            'join_other_as' => 'idSerie',
            'join_self_as' => 'idSerie',
            'join_table' => 'SerieCategoria'
        ),
        'UsuarioSeries' => array(
            'class' => 'UsuarioSerie',
            'my_key' => 'idSerie',
            'other_key' => 'idUsuario',
            'join_other_as' => 'idSerie',
            'join_self_as' => 'idSerie',
            'join_table' => 'SerieCategoria'
        ),
        'Temporadas' => array(
            'class' => 'Temporada',
            'my_key' => 'idSerie',
            'other_key' => 'idTemporada',
            'join_other_as' => 'idSerie',
            'join_self_as' => 'idSerie',
            'join_table' => 'Temporada'
        ),
        'ListasDetalle' => array(
            'class' => 'ListaDetalle',
            'my_key' => 'idSerie',
            'other_key' => 'idListaDetalle',
            'join_other_as' => 'idSerie',
            'join_self_as' => 'idSerie',
            'join_table' => 'ListaDetalle'
        )

    );

    function __construct($idSerie = null, $titulo = null, $descripcion = null, $puntuacion = null, $fechaEstreno = null, $reparto = null, $features = null, $lenguaje = null, $activo = null) {
        $this->idSerie = $idSerie;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->puntuacion = $puntuacion;
        $this->fechaEstreno = $fechaEstreno;
        $this->reparto = $reparto;
        $this->features = $features;
        $this->lenguaje = $lenguaje;
        $this->activo = $activo;
    }




    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idSerie;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function getFechaEstreno() {
        return $this->fechaEstreno;
    }

    function getReparto() {
        return $this->reparto;
    }

    function getFeatures() {
        return $this->features;
    }

    function getLenguaje() {
        return $this->lenguaje;
    }

    function getActivo() {
        return $this->activo;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setId($idSerie) {
        $this->idSerie = $idSerie;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function setFechaEstreno($fechaEstreno) {
        $this->fechaEstreno = $fechaEstreno;
    }

    function setReparto($reparto) {
        $this->reparto = $reparto;
    }

    function setFeatures($features) {
        $this->features = $features;
    }

    function setLenguaje($lenguaje) {
        $this->lenguaje = $lenguaje;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }

    public static function getInstance(Serie $Serie = null){
       if($Serie != null){


        $instance = new Serie(
            null,
            $Serie->getTitulo(),
            $Serie->getDescripcion(),
            $Serie->getPuntuacion(),
            $Serie->getFechaEstreno(),
            $Serie->getReparto(),
            $Serie->getFeatures(),
            $Serie->getLenguaje(),
            $Serie->getActivo()
            );
        return $instance;
    } else{
        return new Serie();
    }
    }


}
