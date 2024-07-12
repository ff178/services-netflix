<?php

class Series_controller extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function getSeries(){
        $res = Serie_bl::obtenerSeries();
        if($res != null){
            print(json_encode($res));
        } else {
            $res = array('error-message'=>'No hay Series disponibles');
            print(json_encode($res));
        }
    }
    
    public function getSerie($id){
        if($id != null){
            $res = Serie_bl::obtenerSeriePorId($id);
        } else{
            $res = null;
        }
        if($res != null){
            print(json_encode($res));
        } else{
             $res = array('error-message'=>'No hay Series disponibles');
             print(json_encode($res));
        }
    }

    public function getByActors($name){
        if($name != null){
        $res = Serie_bl::getSerieByActor($name);
        print(json_encode($res));
        } else{
            $res = array('error-message'=>'No se encontró películas por el actor que ha especificado');
            print(json_encode($res));
        }
        
    }
    
    public function getByReleaseDate($date){
        if($date != null){
            $res = Serie_bl::getSeriesByFechaEstreno($date);
            print(json_encode($res));
        } else{
            $res = array('error-message'=>'No se encontró ninguna serie por la fecha que otorgó');
            print(json_encode($res));
        }    
    }
    
    public function getByRate($rate){
        if($rate != null){
            $res = Serie_bl::getSeriesByPuntuacion($rate);
            print(json_encode($res));
        } else{
            $res = array('error-message'=>'NO se encontraron series con esa puntuación');
            print(json_encode($res));
        }
    }
    
    public function getByCategory($name){
        if($name != null){
            $res = Serie_bl::filtroSerieXCategoria($name);
            print(json_encode($res));
        } else{
            $res = array('error-message'=>'No se encontraron series');
            print_r(json_encode($res));
        }
        
        
    }

}
