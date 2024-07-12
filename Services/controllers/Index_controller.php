<?php

class Index_controller extends Controller {

	function __construct() {
		parent::__construct();
	}

        public function getIndex(){
            Request::setHeader(202,"text/html");
            echo "Index controller Requested By a Get Method";
        }

        public function postIndex(){
            Request::setHeader(202,"text/html");
            echo "Post method Index controller";
        }
        
        public function putIndex(){
            Request::setHeader(202,"text/html");
            echo "Put method Index controller";
        }

        public function getSaludo($nombre,$apellido){
            if (!isset($nombre) || !isset($apellido)) {
                throw new Exception('Paremetros insuficientes.');
            }
            Request::setHeader(200,"text/plain");
            echo "Holi ".$nombre." ".$apellido."!";
        }
        
        public function getSuma($a,$b){
            print json_encode(["a"=>$a,"b"=>$b,"resultado"=>$a+$b]);
        }
}
