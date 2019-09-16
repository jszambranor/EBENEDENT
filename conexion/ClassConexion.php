<?php

class ClassName extends AnotherClass
{
    public function __construct()
    {
    }

    public function Conexion()
    {
        $host = "35.178.43.117";
        $db = "Ebenedent";
        $user = "ebenedent";
        $password = "@Ebendentsys593";

        try {
            $con = new PDO('mysql:host=$host;dbname=$db', $user, $password);
        } catch (PDOException $e) {
            echo "FALLO EN LA CONEXION";
        }

        if (isset($con)) {
            return $con;
        } else {
            echo "ERROR DE CONEXION";
        }
    }
}
