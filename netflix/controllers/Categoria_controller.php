<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria_controller
 *
 * @author camilo
 */
class Categoria_controller extends Controller{
   
    function __construct() {
        parent::__construct();
    }
    
    public function save(){
        $descripcion = filter_input(INPUT_POST, "descripcion");
        $r = Categoria_bl::save($descripcion);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public function update(){
        $idCategoria = filter_input(INPUT_POST, "idCategoria");
        $descripcion = strtolower(filter_input(INPUT_POST, "descripcion"));
        
        $r = Categoria_bl::update($idCategoria,$descripcion);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public  function get(){
        $idCategoria = filter_input(INPUT_POST, "idCategoria");
        $r = Categoria_bl::get($idCategoria);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public  function getAll(){
        $r = Categoria_bl::getAll();

        $json = json_encode($r);
        print_r($json);
        header("Content-type: application/json;charset=utf-8");
        return $json;
    }
    
    public function delete(){
        $idCategoria = filter_input(INPUT_POST, "idCategoria");
        $r = Categoria_bl::delete($idCategoria);
        
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
}