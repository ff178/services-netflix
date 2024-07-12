<?php
/**
 * Description of Usuario
 *
 * @author pabhoz
 */
class Usuario extends Model{

    protected static $table = "Usuario";

    private $id;
    private $rol;
    private $username;
    private $email;
    private $password;



    private $has_one = array(
        'Rol'=>array(
            'class'=>'Rol',
            'join_as'=>'rol',
            'join_with'=>'id'
            )
        );

    private $has_many = array(
        'Amigos'=>array(
            'class'=>'Usuario',
            'my_key'=>'id',
            'other_key'=>'id',
            'join_as'=>'id_user',
            'join_with'=>'id_friend',
            'join_table'=>'friends'
            ),
        );

        function __construct($id, $username, $email, $password, $rol = null) {
            $this->id = $id;
            $this->rol = $rol;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }

        
    public function getMyVars(){
        return get_object_vars($this);
    }

    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }
    function getRol() {
        return $this->rol;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }


}
