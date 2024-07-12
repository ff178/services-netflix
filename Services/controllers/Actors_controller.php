<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actors_controller
 *
 * @author usuario
 */
class Actors_controller extends Controller {
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    public function getActors(){
        $res = Actors_bl::getActors();
        if($res != null){
            print(json_encode($res));
        } else{
            print(json_encode(array('error-message'=>'Paila')));
        }
    }
}
