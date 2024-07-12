<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuenta_bl
 *
 * @author camilo
 */
class Cuenta_bl {

    public static function login($mail,$password){
        //Busca si ese correo se encuentra registrado
        if(self::exists($mail)==1){
            //Valida el correo y la contraseña
            $cuenta = self::validate($mail,$password);

            print_r($cuenta);

            //Si son correctos
            if($cuenta ==1){

                $r["error"] = 0;
                $r["mensaje"] = "Todo Correcto";

                //Trae al Usuario y lo mete en sesion
                $usr = self::getByEmail($mail);
                self::crearSesion($usr);

            }else{
                $r["error"] = 2;
                $r["mensaje"] = "Contraseña Incorrecta";
            }
        }else{
            $r["error"] = 1;
            $r["mensaje"] = "El correo no Existe";

        }

        return $r;
    }


    public static function getByEmail($mail){
      $usuario = Cuenta::getBy('email', $mail);
      if($usuario != null){
          return  $usuario;
      }else {
        return $r = 0;
      }

    }

    public static function validate($mail,$password){
        $usuario = Cuenta::whereF('email = "'.$mail.'" and password = "'.$password.'"');

        if($usuario != null){
            $r = 1;
        }else {
            $r = 0;
        }

        return $r;

    }

    public static function exists($mail){
      $usuario = Cuenta::getBy('email', $mail);
      if($usuario != null){
        if($usuario->getEmail() == $mail){
          $r = 1;
        }
      }else {
        $r = 0;
      }

      return $r;
    }

    public static function crearSesion(Cuenta $cuenta){
        Session::set("tipoCuenta", $cuenta->getIdTipoCuenta());
        Session::set("mail", $cuenta->getEmail());
        Session::set("idUser", $cuenta->getId());

    }

    public static function getSesionIdTipoUser(){
        $sesion = Session::get("tipoCuenta");
        return $sesion;
    }

    public static function cerrarSesion(){

        Session::remove("tipoCuenta");
        Session::remove("mail");
        Session::remove("idUser");
    }

    public static function verSesion(){
        echo '<pre>';
            var_dump($_SESSION);

        echo '</pre>';
    }

    public static function registrarCuenta($data){
        $keys = Cuenta::getKeys();
        $this->validateKeys($keys,filter_input_array(INPUT_POST));
        $cuenta = Cuenta::instanciate($data);
        $res = $cuenta->create();
        $user = new Usuario();
        $user->setIdCuenta($cuenta->getIdCuenta());
        $userName = $data->getNombre();
        $userName2= $data->getApellido();
        $usr = $userName[0].$userName2;
        $user->setNombre($usr);
        $resp= $user->create();
        if ($res['error'] == 1){
            $message = "No se pudo crear la cuenta";
            $res = ['Error'=>$message];
            return json_encode($res);
        } else{
            $message = "Cuenta creada correctamente";
            self::crearSesion($cuenta);
        }
    }

    public static function obtenerCuentas(){
         $allCuentas = Cuenta::getAll();
         if($allCuentas != null){
             return json_encode( $allCuentas);
         } else{
             $cause = "No hubo resultados en la BD";
             $message = "No se puede encontrar cuentas";
                 $res = ['cause'=>$cause, 'message'=>$message];
             return json_encode($res);
         }

    }

    public static function obtenerCuenta($id){
         $cuenta = Cuenta::getById($id);
        if($cuenta != null){
            return json_encode($cuenta);
        } else{
            $err = ['error' =>'No se encontró una cuenta'];
            return json_encode($err);
        }
    }

    public static function actualizarCuenta(){
        $keys = Cuenta::getKeys();
        $this->validateKeys($keys,filter_input_array(INPUT_POST));
        $cuenta = new Cuenta();
        $res = $cuenta->update($field, $value) ;
        return json_encode($res);
    }

    public static function borrarCuenta($id){
        $userToDelete = Usuario::whereR("idUsuario","idCuenta",$id,"Usuario");
        for($i = 0; $i<sizeof($userToDelete);$i++){
            $list = new ListaReproduccion();
            $listToDelete = ListaReproduccion::whereR("idListaReproduccion","idUsuario",$userToDelete[$i],"ListaReproduccion");
            if(sizeof($listToDelete>1)){
                for($j=0; $j<sizeof($listToDelete);$i++){
                    $list->setIdListaReproduccion($listToDelete[$j]);
                    $list->delete();
                }

            }else{
                 $list->setIdListaReproduccion($listToDelete);
                    $list->delete();
            }
            $user = new Usuario();
            $user->setId($userToDelete[$i]);
            $user->delete();

        }

        $cuenta = new Cuenta();
        $cuenta->setIdCuenta($id);
        $cuenta->delete();
    }

}
