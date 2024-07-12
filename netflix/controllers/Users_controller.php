<?php

class Users_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function login() {
        $this->view->render($this,"login","Iniciar sesión - Netflix");
        
        
    }

    public function iniciarSesion() {
        $mail = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");   
        
        $r = Cuenta_bl::login($mail, $password);
        $json=  json_encode($r);
        return $json;
    }

    public function registro() {
        $this->view->render($this,"registro","Registro - Netflix");
    }

    public function perfiles() {
        $this->view->render($this,"perfiles","Perfiles - Netflix");

    }

    public function administrarPerfil() {
        $this->view->render($this,"administrarPerfil","Administrar perfiles - Netflix");
    }

    public function seePerfil($idUsuario) {
        $user = Usuario::where("idUsuario", $idUsuario);
        //print_r($user);
        header("Content-type: application/json;charset=utf-8");  
        echo json_encode($user);
    }
    public function editarPerfil() {
        $this->view->render($this,"editarPerfil","Editar perfiles - Netflix");
    }
    public function panelAdmin() {
         if(Session::get("tipoCuenta") == 1){
        $this->view->render($this,"panelAdmin","Panel Administrador - Netflix");    
        }else{
            echo "403 Forbidden";
        }
    }

    public function panelDatos() {
        $this->view->render($this,"panelDatos","Panel Datos - Netflix");
    }
    
    public function save(){
        $nombre = filter_input(INPUT_POST, "nombre");
        $idCuenta = Session::get("idUser");
        $r = Users_bl::save($idCuenta,$nombre);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public function update(){
        $nombre = filter_input(INPUT_POST, "nombre");
        $idUsuario = filter_input(INPUT_POST, "idUsuario");
        
        $r = Users_bl::update($idUsuario,$nombre);
        $json = json_encode($r);
        print_r($json);
        
        return $json;
    }
    
    public  function get(){
        $idUsuario = filter_input(INPUT_POST, "idUsuario");
        $r = Users_bl::get($idUsuario);
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public  function getAll(){
        $r = Users_bl::getAll();

        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
     public  function getUsersByCuenta(){
        $idCuenta = Session::get("idUser");
        $r = Users_bl::getUsersByCuenta($idCuenta);
        $json = json_encode($r);
        print_r($json);
        header("Content-type: application/json;charset=utf-8");
        return $json;
    }
    
    public function delete(){
        $idUsuario = filter_input(INPUT_POST, "idUsuario");
        $r = Users_bl::delete($idUsuario);
        
        $json = json_encode($r);
        print_r($json);
        return $json;
    }
    
    public function verSesion(){        
        Cuenta_bl::verSesion();
    }    


    public function cuenta() {
        $this->view->render($this,"cuenta","Cuenta - Netflix");
    }

    public function cambiarContrasena() {
        $this->view->render($this,"cambiarContrasena","Cambiar Contraseña - Netflix");
    }
    
    public function addAccount(){
        $cuenta = new Cuenta();
        $cuenta->setIdTipoCuenta(2);
        $cuenta->setNombre(filter_input(INPUT_POST, "nombre"));
        $cuenta->setApellido(filter_input(INPUT_POST, "apellido"));
        $cuenta->setEmail(filter_input(INPUT_POST, "email"));
        $cuenta->setPassword(filter_input(INPUT_POST, "password"));
        $cuenta->setEstado(0);
        $res =Cuenta_bl::registrarCuenta($cuenta);
        echo $res;
    }

}
