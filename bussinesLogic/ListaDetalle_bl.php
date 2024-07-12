<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListaDetalle_bl
 *
 * @author usuario
 */
class ListaDetalle_bl {
    //put your code here
    
    public static function createListaDetalle(ListaDetalle $list){
        $message = null;
        $list->setId('1');
        if($list->getIdPelicula() != null || $list->getIdPelicula() != ''){
            $existPelicula = Pelicula::whereR("idPelicula", "idPelicula", $list->getIdPelicula(), "Pelicula");
            if($existPelicula != null){
                if($list->getIdSerie() == null || $list->getIdSerie()==''){
                    $msg = $list->create();
                    if($msg['error'] == 0){
                        $message = "Añadido Correctamente";
                    } else{
                        $message = "No se pudo añadir un item";
                    }
                   
                }else{
                    $message = "No se pueden crear dos tipos de items a la vez";
                } 
            } else{
                $message = "No hay un item seleccionado para agregar(Pelicula)";
            }
        }else if($list->getIdSerie() != null || $list->getIdSerie()!=''){
            $existSerie = Serie::whereR("idSerie","idSerie",$list->getIdSerie(),"Serie");
        if($existSerie != null){
            if($list->getIdPelicula() == null || $list->getIdPelicula() == ''){
                $msg= $list->create();
                if($msg['error'] == 0){
                    $message="Añadido correctamente";
                } else{
                    $message ="No se pudo anadir item(serie) ".$msg['msg'];
                }
                
            } else{
                $message = "No hay un item seleccionado para agregar(serie)";
            }
        }
        }else{
            $message = "No se pueden agregar dos tipos de items a la vez";
        }
        $response= array('message'=>$message);
        
        return json_encode($response);
    }
    
    
    public static function borrarListaDetalle($id){
        $detalle = ListaDetalle::deleteById($id, "idListaDetalle");
        header("Content-Type:application/json");
        return json_encode($detalle);
    }
    
    

}
