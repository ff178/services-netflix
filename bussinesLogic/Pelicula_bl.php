<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pelicula_bl {

    public static function get($id) {
        $pelicula = Pelicula::where("idPelicula", $id);
        print_r($pelicula);
        if ($pelicula != null) {
            header('Content-Type: application/json');
            return json_encode($pelicula);
        } else {
            $err = ['error' => 'No se encontró una pelicula'];
            header('Content-Type: application/json');
            return json_encode($err);
        }
    }

    public static function filtroPeliculaXCategoria($categoriaNombre) {
        $idCategoria = Categoria::getAll();
        $var = 0;
        for ($i = 0; $i < count($idCategoria); $i++) {
            if (trim(strtolower($idCategoria[$i]["descripcion"])) == trim(strtolower($categoriaNombre))) {
                $var = $idCategoria[$i]["idCategoria"];
            }
        }
        //   print_r($array);
        $movCategoria = PeliculaCategoria::getAll();
        $arrayMov_Cat = array();
        for ($i = 0; $i < count($movCategoria); $i++) {
            if ($movCategoria[$i]["idCategoria"] == $var) {
                array_push($arrayMov_Cat, $movCategoria[$i]["idPelicula"]);
            }
        }
        $arrayPelicula = array();

        for ($i = 0; $i < count($arrayMov_Cat); $i++) {
            $pelicula = Serie::whereR("*", "idPelicula", $arrayMov_Cat[$i], "Pelicula");
            array_push($arrayPelicula, $pelicula);
        }
        //   print_r($arraySerie);
        return $arrayPelicula;
    }

    public static function getCategoria($id) {
        $pelicula = Pelicula::whereR('idCategoria', 'idPelicula', $id, 'PeliculaCategoria');

        if ($pelicula != null) {
            header('Content-Type: application/json');
            return json_encode($pelicula);
        } else {
            $err = ['error' => 'No se encontró una pelicula'];
            header('Content-Type: application/json');
            return json_encode($err);
        }
    }

    public static function getAll() {
        $pelicula = Pelicula::getAll();
        return json_encode($pelicula);
    }

    public static function create(Pelicula $pelicula) {
        //verifica que el titulo no hay asido agregado ya


        if (self::exists($pelicula->getTitulo()) == 0) {

            $instanciate = Pelicula::getInstance($pelicula);
            $instanciate->create();

            //print_r($instanciate);
            $r["error"] = 0;
            $r["mensaje"] = "Todo Correcto";
            print_r($r);
        } else {
            $r["error"] = 1;
            $r["mensaje"] = "Esa Pelicula ya Existe";
            print_r($r);
        }
    }

    public static function update(Pelicula $pelicula) {

        $r = $pelicula->update('idPelicula');

        return $r;
    }

    public static function exists($title) {

        $pelicula = Pelicula::getBy('titulo', $title);

        if ($pelicula != null) {
            $tituloServer = strtolower($pelicula->getTitulo());
            $title = strtolower($title);
            if ($tituloServer == $title) {
                $r = 1;
            }
        } else {
            $r = 0;
        }
        return $r;
    }

    public static function delete($id) {
        //Borrado de la lista dereproduccion
        $pelicula = Pelicula::whereR('idListaDetalle', 'idPelicula', $id, 'ListaDetalle');


        if (count($pelicula) != 0) {
            $nuevoId = $pelicula[0]['idListaDetalle'];
            Pelicula::deleteCompuesto('ListaDetalle', $nuevoId, 'idListaDetalle');
        }
        //Borrado de la pelicula categoria
        $pelicula = Pelicula::whereR('idPelicula', 'idPelicula', $id, 'PeliculaCategoria');

        if (count($pelicula) != 0) {
            $nuevoId = $pelicula[0]['idPelicula'];
            Pelicula::deleteCompuesto('PeliculaCategoria', $nuevoId, 'idPelicula');
        }
        //Borrado de la pelicula
        $pelicula = Pelicula::whereR('idPelicula', 'idPelicula', $id, 'Pelicula');
        $nuevoId = $pelicula[0]['idPelicula'];
        Pelicula::deleteById($nuevoId, 'idPelicula');
    }

    public static function getPeliculaByActor($actorName) {

        $pelicula = Pelicula::getAll();
        $array = array();
        for ($i = 0; $i < count($pelicula); $i++) {
            if (trim(strtolower($pelicula[$i]["reparto"])) == trim(strtolower($actorName))) {
                array_push($array, $pelicula[$i]);
            }
        }
        return $array;
    }

    public static function getPeliculasByFechaEstreno($fechaEstreno) {

        $pelicula = Pelicula::getAll();
        $array = array();
        for ($i = 0; $i < count($pelicula); $i++) {
            if (trim(strtolower($pelicula[$i]["fechaEstreno"])) == trim(strtolower($fechaEstreno))) {
                array_push($array, $pelicula[$i]);
            }
        }
        return $array;
    }

    public static function getPeliculasByPuntuacion($puntuacion) {
        $pelicula = Pelicula::getAll();
        $array = array();
        for ($i = 0; $i < count($pelicula); $i++) {
            if (trim(strtolower($pelicula[$i]["puntuacion"])) == trim(strtolower($puntuacion))) {
                array_push($array, $pelicula[$i]);
            }
        }
        return $array;
    }

}
