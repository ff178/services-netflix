<?php

class Pelicula_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function pelicula() {
        $this->view->render($this,"pelicula","Peliculas - Netflix");
    }

    public function detalles() {
        $this->view->render($this,"detalles","detalless - Netflix");
    }
    
    public function similares() {
        $this->view->render($this,"similares","similaress - Netflix");
    }


    public function getId($id){
        $r= Pelicula_bl::get($id);
        echo $r;
    }
    
    public function getCategoria($id){
        $r= Pelicula_bl::getCategoria($id);
        echo $r;
    }
    
    
    public function getPeliculaCategoria($descripcion){
        $r= Pelicula_bl::getPeliculaCategoria($descripcion);
        echo $r;
    }
    
    
     public  function getAll(){
        $r = Pelicula_bl::getAll();

        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    

    public function create(){
      
        $pelicula = new Pelicula();
        $pelicula->setTitulo(filter_input(INPUT_POST, "titulo"));
        $pelicula->setDescripcion(filter_input(INPUT_POST, "descripcion"));
        $pelicula->setDuracion(filter_input(INPUT_POST, "duracion"));
        $pelicula->setPuntuacion(filter_input(INPUT_POST, "puntuacion"));

        $pelicula->setFechaEstreno(filter_input(INPUT_POST, "fechaEstreno"));
        $pelicula->setLenguaje(filter_input(INPUT_POST, "lenguaje"));
        $pelicula->setUrl(filter_input(INPUT_POST, "url"));
        $pelicula->setPortada(filter_input(INPUT_POST, "portada"));
        $pelicula->setReparto(filter_input(INPUT_POST, "reparto"));
        $pelicula->setFeatures(filter_input(INPUT_POST, "features"));
        $pelicula->setActivo(filter_input(INPUT_POST, "activo"));
        $r = Pelicula_bl::create($pelicula);

        print_r($r);
        return $r;

    }

    public function verSesion(){        
            Cuenta_bl::verSesion();
       // $prueba = Cuenta_bl::verSesion();
      //  $pelicula = Pelicula::getById($prueba);

        //print_r($prueba);
    
        }   

        
        
    public function setSesion(){
        
        Session::set("idPelicula",10);
    }   

    public function update(){
        
        $pelicula = new Pelicula();
        $pelicula->setTitulo(filter_input(INPUT_POST, "titulo"));
        $pelicula->setDescripcion(filter_input(INPUT_POST, "descripcion"));
        $pelicula->setDuracion(filter_input(INPUT_POST, "duracion"));
        $pelicula->setPuntuacion(filter_input(INPUT_POST, "puntuacion"));

        $pelicula->setFechaEstreno(filter_input(INPUT_POST, "fechaEstreno"));
        $pelicula->setLenguaje(filter_input(INPUT_POST, "lenguaje"));
        $pelicula->setUrl(filter_input(INPUT_POST, "url"));
        $pelicula->setPortada(filter_input(INPUT_POST, "portada"));
        $pelicula->setReparto(filter_input(INPUT_POST, "reparto"));
        $pelicula->setFeatures(filter_input(INPUT_POST, "features"));
        $pelicula->setActivo(filter_input(INPUT_POST, "activo"));
        $id =Session::get('idPelicula');
        $pelicula->setId($id);
        
        $r = Pelicula_bl::update($pelicula);
        $json = json_encode($r);
        print_r($json);
        
        return $json;
    }


    public function delete(){

      $id = filter_input(INPUT_POST, "id");

        $r = Pelicula_bl::delete($id);
        return $r;
    }



    }
