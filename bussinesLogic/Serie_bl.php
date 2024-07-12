<?php
 Class Serie_bl{

 	public static function obtenerSeries(){
 		$allSeries = Serie::getAll();
         if($allSeries != null){
             return json_encode( $allSeries);
         } else{
             $cause = "No hubo resultados en la BD";
             $message = "No se puede encontrar series";
                 $res = ['cause'=>$cause, 'message'=>$message];
             return json_encode($res);
         }
 	}

 	public static function obtenerSeriePorId($id){
 		 $serie = Serie::where("idSerie", $id);
                 print_r($serie);
        if($serie != null){
            header('Content-Type: application/json');
            return json_encode($serie);
        } else{
            $err = ['error' =>'No se encontró una serie'];
            header('Content-Type: application/json');
            return json_encode($err);
        }
 	}

 	public static function borrarSerie($id){
 		try{
 		$serie = new Serie();
                $res = null;
                $listaABorrar = ListaDetalle::whereR("idListaDetalle", "idSerie", $id, "ListaDetalle");
                if(count($listaABorrar)==1){
                    $resp = ListaDetalle_bl::borrarListaDetalle($listaABorrar);
                }else if(count($listaABorrar)>1){
                    for($i=0;$i<count($listaABorrar);$i++){
                       $resp = ListaDetalle_bl::borrarListaDetalle($listaABorrar[$i]);
                    }
                }
 		$serie->setIdSerie($id);
 		$temporada = new Temporada;
 		$tem_a_borrar= Temporada::whereR("idTemporada","idSerie",$id,"Temporada");
 		if(sizeof($tem_a_borrar)==1){
                    $res= Temporada_bl::borrarTemporada($tem_a_borrar);
 		} else if(count($tem_a_borrar)>1){
 			for($i=0;$i<count($tem_a_borrar);$i++){
 				$res = Temporada_bl::borrarTemporada($item_a_borrar[$i]);
 			}
 		}
                header("Content-Type:application/json");
                return json_encode($res);
 		}catch(Exception $e){
 			echo $e->getMessage();
 	}
 	}

 	public static function crearSerie(Serie $data){
 		$keys = Serie::getKeys();
                
        $serie = Serie::getInstance($data);
        $res_serie = $serie->create();
        print_r($res_serie);
        $temporada = new Temporada();
        $validator = $temporada->where("idSerie",$serie->getId());
        print_r($validator);
        if(count($validator) == 0){
        	$temporada->setIdSerie($serie->getId());
        	$temporada->setDescripcion("Temporada 1");
        	$keysTemp = Temporada::getKeys();
           $msg = $temporada->create();
           print_r($msg);
           return $msg;

            }
 	}

 	public static function filtroSerieXCategoria($categoriaNombre){
 		$idCategoria = Categoria::getAll();
                $var = 0;
                for($i=0; $i<count($idCategoria); $i++){
                    if(trim(strtolower($idCategoria[$i]["descripcion"])) == trim(strtolower($categoriaNombre))){
                        $var = $idCategoria[$i]["idCategoria"];
                    } 
                }
             //   print_r($array);
                $serCategoria = SerieCategoria::getAll();
                $arraySer_Cat = array();
                for($i=0;$i<count($serCategoria); $i++){
                    if($serCategoria[$i]["idCategoria"] == $var){
                        array_push($arraySer_Cat,$serCategoria[$i]["idSerie"]);
                    }
                }
                $arraySerie = array();
                
                for($i=0;$i<count($arraySer_Cat);$i++){
                  $serie = Serie::whereR("*","idSerie", $arraySer_Cat[$i],"Serie");
                  array_push($arraySerie, $serie);
                }
             //   print_r($arraySerie);
                return $arraySerie;
                
                
 	}

 	public static function exists($title){
          
      $serie = Serie::getBy('titulo', $title);
      
      if($serie != null){
      	$tituloServer = strtolower($serie->getTitulo());
      	$title = strtolower($title);
        if(trim($tituloServer) == trim($title)){
          $r = 1;
        }
      }else {
        $r = 0;
      }

      return $r;
 }

  
 public static function getSerieByActor($actorName){
      
     $serie = Serie::getAll();
     $array = array();
     for($i = 0; $i<count($serie); $i++){
     if(trim(strtolower($serie[$i]["reparto"])) == trim(strtolower($actorName))){
         array_push($array, $serie[$i]);
        
     }
     
     }
     return $array;
 }
 
 public static function getSeriesByFechaEstreno($fechaEstreno){
       
     $serie = Serie::getAll();
     $array = array();
     for($i = 0; $i<count($serie); $i++){
     if(trim(strtolower($serie[$i]["fechaEstreno"])) == trim(strtolower($fechaEstreno))){
         array_push($array, $serie[$i]);
        
     }
     
     }
     return $array;
 }
 
 
public static function getSeriesByPuntuacion($puntuacion){
       $serie = Serie::getAll();
     $array = array();
     for($i = 0; $i<count($serie); $i++){
     if(trim(strtolower($serie[$i]["puntuacion"])) == trim(strtolower($puntuacion))){
         array_push($array, $serie[$i]);
        
     }
     
     }
     return $array;
}
 
 }
