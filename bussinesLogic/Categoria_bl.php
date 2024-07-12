<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria_bl
 *
 * @author camilo
 */
class Categoria_bl {
     public static function save($nombre){
        
        $categoria = Categoria::where('descripcion', $nombre);
        
        if($categoria != null){
            $r = ['error'=>1,'msg'=>'Ya existe este Genero'];
        }  
        else {
            $categoria = new Categoria();
            $categoria->setDescripcion($nombre);

            $r = $categoria->create();
        }
        
        return $r;
        
    }
    
    public static function get($id){
        $lista = Categoria::where('idCategoria',$id);
        
        if($lista != null){
            return array_shift($lista);
        } else{
            $u = ['error' =>1,'msj' =>'No se encontro la Categoria Lista'];
            return $u;
        }
    }    
    
    public static function update($idCategoria,$descripcion){
        
        $descripcion = Categoria::where('descripcion', $descripcion);
        
        if($descripcion != null){
            $u = ['error' =>1,'msj' =>'Ya se ha registrado esta categoria'];
            return $u;
        }
        
        $categoria = Categoria::getBy('idCategoria',$idCategoria);
        
        if($categoria == null){
            $u = ['error' =>1,'msj' =>'No se han encontrado datos de la categoria '.$idCategoria];
            return $u;
        }
        
        $r = self::updateP($categoria, $descripcion);        
        return $r;
    }
        
    private static function updateP(Categoria $categoria, $nombre){
        $categoria->setDescripcion($nombre);        
        return $categoria->update('idCategoria');
    }
    
    public static function delete($idCategoria){
        $categoria = new Categoria();
        $categoria ->setId($idCategoria);
        $r = $categoria ->deleteById($idCategoria,'idCategoria');
        return $r;
    }
    
    public static function getAll(){
        $lista = Categoria::getAll();           
        return $lista;
    }
}

