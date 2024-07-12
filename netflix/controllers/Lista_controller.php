<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lista_Controller
 *
 * @author camilo
 */
class Lista_controller extends Controller{
   
    function __construct() {
        parent::__construct();
    }

    public function lista(){
        $this->view->render($this,"listaPerfil","Lista Usuario - Netflix");
    }
    
    public function save(){
        $idUsuario = filter_input(INPUT_POST, "idUsuario");
        $r = ListaReproduccion_bl::save($idUsuario);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public function update(){
        $idLista = filter_input(INPUT_POST, "idLista");
        $idUsuario = filter_input(INPUT_POST, "idUsuario");
        
        $r = ListaReproduccion_bl::update($idLista,$idUsuario);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public  function get(){
        $idLista = filter_input(INPUT_POST, "idLista");
        $r = ListaReproduccion_bl::get($idLista);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public  function getAll(){
        $r = ListaReproduccion_bl::getAll();

        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public function delete(){
        $idLista = filter_input(INPUT_POST, "idLista");
        $r = ListaReproduccion_bl::delete($idLista);
        
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public function add(){
        $list = new ListaDetalle();
        $list->setIdListaReproduccion(filter_input(INPUT_POST, "lista"));
        $data = filter_input(INPUT_POST, "idItem");
        if(filter_input(INPUT_POST, "checkType"==1)){
            $list->setIdPelicula($data);
        } else if(filter_input(INPUT_POST, "checkType")==2){
            $list->setIdSerie($data);
        } else{
            echo json_encode(array('message'=>'No ha seleccionado un tipo de contenio'));
        }
        $response = ListaDetalle_bl::createListaDetalle($list);
        echo $response;
        
        
    }
    
}
