<?php

class Conexion
{

    public function crearConexion()
    {
        $dbHost = "localhost";
        $dbName = "db_twoFilm";
        $dbUser = "root";
        $dbPassword = "admin";
        try {
            $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
            $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConn;
        } catch (Exception $e) {
            echo "Not connected, check " . $e->getMessage();
            return null;
        }
    }

    public function cerrarConexion($dbConn)
    {
        $dbConn = null;
    }
}
