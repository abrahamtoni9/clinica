<?php


    class ConexionBD
    {
        static public function cBD()
        {
            $bd = new PDO("mysql:host=localhost;dbname=clinica","root","");
            $bd -> exec("SET NAMES UTF8");
            return $bd;
        }
    }