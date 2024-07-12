<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actors_bl
 *
 * @author usuario
 */
class Actors_bl {
    //put your code here

    public static function getActors(){
        $actorsSeries = Serie::getAll();
        $actorsMovies = Pelicula::getAll();
        $arrayActors = array();
        for($i=0;$i<count($actorsSeries); $i++){
            array_push($arrayActors,$actorsSeries[$i]["reparto"]);
        }
        //print_r($arrayActors);
        for($i=0;$i<count($actorsMovies);$i++){
            array_push($arrayActors,$actorsMovies[$i]["reparto"]);
        }
        return $arrayActors;
    }
}
