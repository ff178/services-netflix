<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users_bl
 *
 * @author camilo
 */
class Users_bl {
    
    
    public static function save($idCuenta, $nombre){       

        //Recibe por parametros la cuenta y el nombre del perfil, posteriormente cuenta los perfiles
        $count = array_shift(Usuario::countFromId("*", 'Usuario','idCuenta', $idCuenta));
        
        //Si los perfiles son mayores a 0 y menores e igual a 4
        if($count["COUNT(*)"]>=0 && $count["COUNT(*)"]<=4){
            $usuario = new Usuario();        
            

            $usuario->setId($idCuenta);
            $usuario->setNombre($nombre);
            
            $usuario->create();
            
            $r["error"] = 0;
            $r["mensaje"] = "Todo Correcto";
        }else{
            $r["error"] = 1;
            $r["mensaje"] = "Se han superado las cuentas de esta cuenta";
        }
        return $r;
        
    }
    
    public static function get($id){
        $user = Usuario::where('idUsuario',$id);
        $user = array_shift($user);
        if($user != null){
            return $user;
        } else{
            $u = ['error' =>1,'msj' =>'No se encontró el Usuario'];
            return $u;
        }
    }
    
    public static function getUsersByCuenta($id){
        $user = Usuario::where('idCuenta',$id);
    
        if($user != null){
            return $user;
        } else{
            $u = ['error' =>1,'msj' =>'No se encontró el Usuario'];
            return $u;
        }
    }
    
    public static function update($id,$nombre){
        $user = Usuario::getBy('idUsuario',$id);
        print_r($user);
        
       $r = self::updateP($user, $nombre);        
        print_r($r);
       return $r;
    }
    
    private static function updateP(Usuario $user, $nombre){
        $user->setNombre($nombre);        
        return $user->update('idUsuario');
    }

    public static function delete($id){
        $user = new Usuario();
        $user ->setId($id);
        $r = $user ->deleteById($id,'idUsuario');
        print_r($r);
        return $r;
    }
    
    public static function getAll(){
        $users = Usuario::getAll();           
        return json_encode($users);        
    }
}
