<?php

class Conexion
{
    public function __construct()
    {
    }

    public function get_Conexion()
    {
        $host = "35.178.43.117";
        $db = "Ebenedent";
        $user = "ebenedent";
        $password = "@Ebendentsys593";

        try {
            $con = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage()." FALLO EN LA CONEXION";
        }

        if (isset($con)) {
            return $con;
        } else {
            echo "<br>ERROR DE CONEXION";
        }
    }
}
