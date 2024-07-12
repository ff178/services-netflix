<?php

class Rol extends Model{
    
    protected static $table="Rol";
    
    private $id;
    private $rol;
    
    function __construct($id, $rol) {
        $this->id = $id;
        $this->rol = $rol;
    }

    
     public function getMyVars() {
        return get_object_vars($this);
     }
     
     function getId() {
         return $this->id;
     }

     function getRol() {
         return $this->rol;
     }

     function setId($id) {
         $this->id = $id;
     }

     function setRol($rol) {
         $this->rol = $rol;
     }


}
