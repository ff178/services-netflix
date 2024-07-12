<?php

class Users_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function getUsers($id) {
        if (isset($id)) {
            $usrs = Users_bl::get($id);
            print(json_encode($usrs));
        } else {
            $usrs = Users_bl::getAll();
            print(json_encode($usrs));
        }
    }

    public function postUsers() {
        
    }

    public function getRobarServicio() {
        $client = new CUrlClient("http://localhost/REST/RESTful/Index/Suma/");
        $r = $client->execute("GET", ["key" => "q5ioq6+nmg==", "a" => 5, "b" => 18]);

        print(json_encode($r));
    }

}
