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
class Pelicula extends Model {

    protected static $table = "Pelicula";
    private $idPelicula;
    private $titulo;
    private $descripcion;
    private $duracion;
    private $fechaEstreno;
    private $lenguaje;
    private $puntuacion;
    private $url;
    private $portada;
    private $reparto;
    private $features;
    private $activo;

    private $has_many = array(
        'PeliculaCategorias' => array(
            'class' => 'PeliculaCategoria',
            'my_key' => 'idPelicula',
            'other_key' => 'idCategoria',
            'join_other_as' => 'idPelicula',
            'join_self_as' => 'idPelicula',
            'join_table' => 'PeliculaCategoria'
        ),
        'UsuarioPeliculas' => array(
            'class' => 'UsuarioPelicula',
            'my_key' => 'idPelicula',
            'other_key' => 'idUsuario',
            'join_other_as' => 'idPelicula',
            'join_self_as' => 'idPelicula',
            'join_table' => 'UsuarioPelicula'
        ),
        'ListasDetalle' => array(
            'class' => 'ListaDetalle',
            'my_key' => 'idPelicula',
            'other_key' => 'idListaDetalle',
            'join_other_as' => 'idPelicula',
            'join_self_as' => 'idPelicula',
            'join_table' => 'ListaDetalle'
        )

    );

    function __construct($idPelicula = null, $titulo = null, $descripcion = null, $duracion = null, $fechaEstreno = null, $lenguaje = null, $puntuacion = null, $url = null, $portada = null, $reparto = null, $features = null, $activo = null) {
        $this->idPelicula = $idPelicula;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->duracion = $duracion;
        $this->fechaEstreno = $fechaEstreno;
        $this->lenguaje = $lenguaje;
        $this->puntuacion = $puntuacion;
        $this->url = $url;
        $this->portada = $portada;
        $this->reparto = $reparto;
        $this->features = $features;
        $this->activo = $activo;
    }



    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idPelicula;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDuracion() {
        return $this->duracion;
    }

    function getFechaEstreno() {
        return $this->fechaEstreno;
    }

    function getLenguaje() {
        return $this->lenguaje;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function getUrl() {
        return $this->url;
    }

    function getPortada() {
        return $this->portada;
    }

    function getReparto() {
        return $this->reparto;
    }

    function getFeatures() {
        return $this->features;
    }
    
    function getActivo() {
        return $this->activo;
    }

    function setId($idPelicula) {
        $this->idPelicula = $idPelicula;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    function setFechaEstreno($fechaEstreno) {
        $this->fechaEstreno = $fechaEstreno;
    }

    function setLenguaje($lenguaje) {
        $this->lenguaje = $lenguaje;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPortada($portada) {
        $this->portada = $portada;
    }

    function setReparto($reparto) {
        $this->reparto = $reparto;
    }

    function setFeatures($features) {
        $this->features = $features;
    }
    
    function setActivo($activo) {
        $this->activo = $activo;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }


    public static function getInstance(Pelicula $pelicula = null){
           if($pelicula != null){

            $instance = new Pelicula(
                null,
                $pelicula->getTitulo(),
                $pelicula->getDescripcion(),
                $pelicula->getDuracion(),
                $pelicula->getFechaEstreno(),
                $pelicula->getLenguaje(),
                $pelicula->getPuntuacion(),
                $pelicula->getUrl(),
                $pelicula->getPortada(),
                $pelicula->getReparto(),
                $pelicula->getFeatures(),
                $pelicula->getActivo()
                );
            return $instance;
        } else{
            return new Pelicula();
        }
        }

}
