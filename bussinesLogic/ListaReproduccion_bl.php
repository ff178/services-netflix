<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListaReproduccion_bl
 *
 * @author camilo
 */
class ListaReproduccion_bl {
    
    public static function save($idUsuario){
        
        $lista = ListaReproduccion::where('idUsuario', $idUsuario);
        
        if($lista != null){
            $r = ['error'=>1,'msj'=>'Ya existe una Lista de Reproducción asociada a este Usuario'];
        }  
        else {
            $lista = new ListaReproduccion();
            $lista->setIdUsuario($idUsuario);
            $r = $lista->create();
        }
        
        return json_encode($r);
        
    }
    
    public static function get($id){
        $lista = ListaReproduccion::where('idListaReproduccion',$id);
        
        if($lista != null){
            return json_encode($lista);
        } else{
            $u = ['error' =>1,'msj' =>'No se encontró la Lista'];
            return json_encode($u);
        }
    }    
    
    public static function update($id,$idUsuario){
        $lista = ListaReproduccion::getBy('idListaReproduccion',$id);
        $user = Users_bl::get($idUsuario);
        
        if(array_key_exists('error',$user)){
            return $user;
        }
        $r = self::updateP($lista, $idUsuario);        
        return $r;
    }
        
    private static function updateP(ListaReproduccion $lista, $idUsuario){
        $lista->setIdUsuario($idUsuario);        
        return $lista->update('idListaReproduccion');
    }
    
    public static function delete($idLista){
        $lista = new ListaReproduccion();
        $lista ->setId($idLista);
        $r = $lista ->deleteById($idLista,'idListaReproduccion');
        print_r($r);
        return $r;
    }
    
    public static function getAll(){
        $lista = ListaReproduccion::getAll();           
        return json_encode($lista);
    }
}
