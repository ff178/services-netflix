<?php

class Capitulo_bl {

    //put your code here

    public static function obtenerCapitulos() {
        $all = Capitulo::getAll();
        if ($all != null) {
            return json_encode($all);
        } else {
            $cause = "No hubo resultados en la BD";
            $message = "No se puede encontrar los capitulos";
            $res = ['cause' => $cause, 'message' => $message];
            return json_encode($res);
        }
    }
    
    public static function obtenerCapituloPorId($id) {
        $all = Capitulo::where('idCapitulo',$id);
        if ($all != null) {
            return json_encode($all);
        } else {
            $err = ['error' => 'No se encontró la temporada'];
            return json_encode($err);
        }
    }
    
    public static function crearCapitulo(Capitulo $capitulo) {
      
        if(self::exists($capitulo->getNumeroCapitulo())==0){

          $instanciate= Capitulo::getInstance($capitulo);
          $instanciate->create();

          //print_r($instanciate);
          $r["error"] = 0;
          $r["mensaje"] = "Todo Correcto";
          print_r($r);

          }else{
            $r["error"] = 1;
            $r["mensaje"] = "Ese Capitulo ya Existe";
          print_r($r);

        }
    }
    
    public static function exists($numeroCapitulo){

      $capitulo = Capitulo::getBy('numeroCapitulo', $numeroCapitulo);

      if($capitulo != null){
      	$tituloServer = strtolower($capitulo->getTitulo());
      	$title = strtolower($numeroCapitulo);
        if($tituloServer == $numeroCapitulo){
          $r = 1;
        }
      }else {
        $r = 0;
      }
      return $r;

    }

    public static function delete($id){
 
     //Borrado de la pelicula
     $capitulo = Capitulo::whereR('idCapitulo', 'idCapitulo', $id, 'Capitulo');
     $nuevoId = $capitulo[0]['idCapitulo'];
     Pelicula::deleteById($nuevoId,'idCapitulo');


    }


}

