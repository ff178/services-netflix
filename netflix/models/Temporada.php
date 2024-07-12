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
class Temporada extends Model {

    protected static $table = "Temporada";
    private $idTemporada;
    private $idSerie;
    private $descripcion;

    private $has_many = array(
        'Capitulos' => array(
            'class' => 'Capitulo',
            'my_key' => 'idTemporada',
            'other_key' => 'idCapitulo',
            'join_other_as' => 'idTemporada',
            'join_self_as' => 'idTemporada',
            'join_table' => 'Capitulo'
        )
    );

    private $has_one = array(
        'Serie' => array(
            'class' => 'Serie',
            'join_as' => 'idSerie',
            'join_with' => 'idSerie',
            'join_table' => 'Temporada'
        )
    );

    function __construct($idTemporada = null, $idSerie = null, $descripcion = null) {
        $this->idTemporada = $idTemporada;
        $this->idSerie = $idSerie;
        $this->descripcion = $descripcion;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getId() {
        return $this->idTemporada;
    }

    function getIdSerie() {
        return $this->idSerie;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setId($idTemporada) {
        $this->idTemporada = $idTemporada;
    }

    function setIdSerie($idSerie) {
        $this->idSerie = $idSerie;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
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


    public static function getInstance(Temporada $temporada = null){
        
        if($temporada != null){
            $instance = new Temporada(
                    null,
                    $temporada->getIdSerie(),
                    $temporada->getDescripcion()
                    );
            
            return $instance;
        } else{
            return new Temporada();
        }
    }


}
