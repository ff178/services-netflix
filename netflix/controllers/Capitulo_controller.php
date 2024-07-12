<?php

class Capitulo_controller extends Controller
{
    function __construct() {
        parent::__construct();
    }

     public function get(){
        //$allSeasons = Temporada::getInstance();
        $res = Capitulo_bl::obtenerCapitulos();
        print_r($res);
        return json_encode(array("resp"=>$res));
    }
    
    public function getId($id){
        //$season = Temporada::getInstance();
        $res = Capitulo_bl::obtenerCapituloPorId($id);
        print_r($res);
        return json_encode(array("resp"=>$res));
    }

    public function create(){
        $capitulo = new Capitulo();
        $capitulo->setIdTemporada(filter_input(INPUT_POST, "idTemporada"));
        $capitulo->setNumeroCapitulo(filter_input(INPUT_POST, "numeroCapitulo"));
        $capitulo->setNombre(filter_input(INPUT_POST, "nombre"));
        $capitulo->setDescripcion(filter_input(INPUT_POST, "descripcion"));
        $capitulo->setDuracion(filter_input(INPUT_POST, "duracion"));
        $capitulo->setUrl(filter_input(INPUT_POST, "url"));
        $capitulo->setPortada(filter_input(INPUT_POST, "portada"));
        $r = Capitulo_bl::crearCapitulo($capitulo);
        print_r($r);
        return $r;
    }

 
    public function delete($id){
       $id = filter_input(INPUT_POST, "id");
       $r = Capitulo_bl::delete($id);
    }
    
}