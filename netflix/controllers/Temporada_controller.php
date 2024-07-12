<?php

class Temporada_controller extends Controller
{
    function __construct() {
        parent::__construct();
    }

     public function get(){
        //$allSeasons = Temporada::getInstance();
        $res = Temporada_bl::obtenerTemporadas();
        print_r($res);
        return json_encode(array("resp"=>$res));
    }
    
    public function getId($id){
        //$season = Temporada::getInstance();
        $res = Temporada_bl::obtenerTemporadaPorId($id);
        //print_r($res);
        return json_encode(array("resp"=>$res));
    }

   
    public function create(){
        $data = Temporada::getInstance();
        
        $data->setIdSerie(filter_input(INPUT_POST, "idSerie"));
        $data->setDescripcion(filter_input(INPUT_POST, "descripcion"));
       
        $res = Temporada_bl::crearTemporada($data);
        print_r($res);
        return json_encode(array("resp"=>$res));
    }

    public function delete($id){
        $res = Temporada_bl::borrarTemporada($id);
        print_r($res);
        return json_encode(array("resp"=>$res));
    }

}
