<?php

class Series_controller extends Controller{
   
    function __construct() {
        parent::__construct();
    }

    public function series() {        
        $this->view->render($this,"serie","Series - Netflix"); 
        
    }

    public function episodio() {        
        $this->view->render($this,"episodios","episodioes - Netflix"); 
        
    }
    
    public function create(){
        $data = Serie::getInstance();
        $data->setTitulo(filter_input(INPUT_POST, "titulo"));
        $data->setDescripcion(filter_input(INPUT_POST, "descripcion"));
        $data->setPuntuacion(filter_input(INPUT_POST, "puntuacion"));
        $data->setFechaEstreno(filter_input(INPUT_POST, "fechaEstreno"));
        $data->setReparto(filter_input(INPUT_POST, "reparto"));
        $data->setFeatures(filter_input(INPUT_POST, "features"));
        $data->setLenguaje(filter_input(INPUT_POST, "lenguaje"));
        $data->setActivo(0);
        $res = Serie_bl::crearSerie($data);
        return json_encode(array("resp"=>$res));
    }
    public function gets($id){
        $msg = Serie_bl::obtenerSeriePorId($id);
        echo $msg;
    }
    
    public function get(){
        $msg = Serie_bl::obtenerSeries();
        echo $msg;
    }
    
    public function delete($id){
        $msg = Serie_bl::borrarSerie($id);
        echo $msg;
    }
    
    public function filter($name){
        $msg = Serie_bl::filtroSerieXCategoria($name);
        echo $msg;
    }
}