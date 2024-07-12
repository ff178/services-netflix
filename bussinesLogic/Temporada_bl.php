<?php

class Temporada_bl {

    //put your code here

    public static function obtenerTemporadas() {
        $allSeasons = Temporada::getAll();
        if ($allSeasons != null) {
            return json_encode($allSeasons);
        } else {
            $cause = "No hubo resultados en la BD";
            $message = "No se puede encontrar las temporadas";
            $res = ['cause' => $cause, 'message' => $message];
            return json_encode($res);
        }
    }
    
    public static function obtenerTemporadaPorId($id) {
        $season = Temporada::where('idTemporada',$id);
        if ($season != null) {
            return json_encode($season);
        } else {
            $err = ['error' => 'No se encontró la temporada'];
            return json_encode($err);
        }
    }
    
    public static function crearTemporada(Temporada $data) {
        $keys = Temporada::getKeys();

        $season = Temporada::getInstance($data);
        $res_season = $season->create();
        print_r($res_season);
        
    }

    public static function borrarTemporada($id) {
        $caps = Capitulo::whereR("idCapitulo", "idTemporada", $id, "Capitulo");
        if (count($caps) != 0) {
            for ($i = 0; $i < count($caps); $i++) {
                Capitulo::deleteById($caps[$i], "idCapitulo");
            }
        }
        $message = Temporada::deleteById($id, "idTemporada");

        return $message;
    }

}
