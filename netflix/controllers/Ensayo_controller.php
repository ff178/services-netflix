<?php

class Ensayo_controller extends Controller{
   
    function __construct() {
        parent::__construct();
    }

    public function mainScreen() {        
        $this->view->render($this,"mainScreen","Netflix");
    }
}
