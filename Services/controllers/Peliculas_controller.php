<?php

class Peliculas_controller extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function getPeliculas(){
        $res = Pelicula_bl::getAll();
        if($res != null){
            print(json_encode($res));
        } else {
            $res = array('error-message'=>'No hay Peliculas disponibles');
            print(json_encode($res));
        }
    }
    
    public function getPelicula($id){
        if($id != null){
            $res = Pelicula_bl::get($id);
        } else{
            $res = null;
        }
        if($res != null){
            print(json_encode($res));
        } else{
             $res = array('error-message'=>'No hay Peliculas disponibles');
             print(json_encode($res));
        }
    }

    public function getByActors($name){
        if($name != null){
        $res = Pelicula_bl::getPeliculaByActor($name);
        print(json_encode($res));
        } else{
            $res = array('error-message'=>'No se encontró películas por el actor que ha especificado');
            print(json_encode($res));
        }
        
    }
    
    public function getByReleaseDate($date){
        if($date != null){
            $res = Pelicula_bl::getPeliculasByFechaEstreno($date);
            print(json_encode($res));
        } else{
            $res = array('error-message'=>'No se encontró ninguna serie por la fecha que otorgó');
            print(json_encode($res));
        }    
    }
    
    public function getByRate($rate){
        if($rate != null){
            $res = Pelicula_bl::getPeliculasByPuntuacion($rate);
            print(json_encode($res));
        } else{
            $res = array('error-message'=>'NO se encontraron series con esa puntuación');
            print(json_encode($res));
        }
    }
    
    public function getByCategory($name){
        if($name != null){
            $res = Pelicula_bl::filtroPeliculaXCategoria($name);
            print(json_encode($res));
        } else{
            $res = array('error-message'=>'No se encontraron peliculas');
            print_r(json_encode($res));
        }
        
        
    }
}
