<?php

require "conexionBD.php";

class SecretariaM extends ConexionBD
{
    static public function ingresarSecretariaM($tablaDB, $datosC)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol FROM secretaria WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosC['usuario'], PDO::PARAM_STR);

        $pdo -> execute();

        return $pdo -> fetch();

        $pdo -> close();

        $pdo = null;
    }
}