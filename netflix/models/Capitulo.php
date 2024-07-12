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
class Capitulo extends Model {

    protected static $table = "Capitulo";
    private $idCapitulo;
    private $idTemporada;
    private $numeroCapitulo;
    private $nombre;
    private $descripcion;
    private $duracion;
    private $url;
    private $portada;

    private $has_one = array(
        'Temporada' => array(
            'class' => 'Temporada',
            'join_as' => 'idTemporada',
            'join_with' => 'idTemporada',
            'join_table' => 'Capitulo'
        )
    );

    function __construct($idCapitulo = null, $idTemporada = null, $numeroCapitulo = null, $nombre = null, $descripcion = null, $duracion = null, $url = null, $portada = null) {
        $this->idCapitulo = $idCapitulo;
        $this->idTemporada = $idTemporada;
        $this->numeroCapitulo = $numeroCapitulo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->duracion = $duracion;
        $this->url = $url;
        $this->portada = $portada;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idCapitulo;
    }

    function getIdTemporada() {
        return $this->idTemporada;
    }

    function getNumeroCapitulo() {
        return $this->numeroCapitulo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDuracion() {
        return $this->duracion;
    }

    function getUrl() {
        return $this->url;
    }

    function getPortada() {
        return $this->portada;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idCapitulo) {
        $this->idCapitulo = $idCapitulo;
    }

    function setIdTemporada($idTemporada) {
        $this->idTemporada = $idTemporada;
    }

    function setNumeroCapitulo($numeroCapitulo) {
        $this->numeroCapitulo = $numeroCapitulo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPortada($portada) {
        $this->portada = $portada;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }
    
    public static function getInstance(Capitulo $capitulo = null){
        if($capitulo != null){
            $instance = new Capitulo(
                    null,
                    $capitulo->getIdTemporada(),
                    $capitulo->getNumeroCapitulo(),
                    $capitulo->getNombre(),
                    $capitulo->getDescripcion(),
                    $capitulo->getDuracion(),
                    $capitulo->getUrl(),
                    $capitulo->getPortada()
                    );
            return $instance;
        } else{
            return new Capitulo();
        }
    }


}
