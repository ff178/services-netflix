<?php

class Pelicula_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function pelicula() {
        $this->view->render($this,"pelicula","Peliculas - Netflix");
    }





        public function getFiveStarMovie() {
            $client = new CUrlClient("http://54.213.230.248/services-netflix/Services/Peliculas/ByRate/");
            $r = $client->execute("GET", ["key" => "q5ioq6+nmg==", "puntuacion" => 5]);

            print(json_encode($r));
        }
        public function getFourStarMovie() {
            $client = new CUrlClient("http://54.213.230.248/services-netflix/Services/Peliculas/ByRate/");
            $r = $client->execute("GET", ["key" => "q5ioq6+nmg==", "puntuacion" => 4]);

            print(json_encode($r));
        }



    }
