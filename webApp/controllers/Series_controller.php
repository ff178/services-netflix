<?php

class Series_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function series() {
        $this->view->render($this,"serie","Series - Netflix");

    }

    public function getFiveStarSerie() {
        $client = new CUrlClient("http://localhost/web/web2/netflix/Services/Series/ByRate/");
        $r = $client->execute("GET", ["key" => "q5ioq6+nmg==", "puntuacion" => 5]);

        print(json_encode($r));
    }
    public function getFourStarSerie() {
        $client = new CUrlClient("http://localhost/web/web2/netflix/Services/Series/ByRate/");
        $r = $client->execute("GET", ["key" => "q5ioq6+nmg==", "puntuacion" => 4]);

        print(json_encode($r));
    }

}
