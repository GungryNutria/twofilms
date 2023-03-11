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
            echo "Connected";
            return $dbConn;
        } catch (Exception $e) {
            echo "Not connected, check " . $e->getMessage();
            return null;
        }
    }

    public function cerrarConexion($dbConn)
    {
        $dbConn = null;
        echo "Disconnected";
    }
}
$consulta = "SELECT * FROM tb_usuario WHERE correo = :correo AND pass = :password";
$conexion = new Conexion();
$resultado = $conexion->crearConexion();
$hola = $resultado->prepare($consulta);
$hola->execute([":correo" => "antoniotorresj15@gmail.com", ":password" => md5("Ju.55.25.17")]);
$hola->fetchAll(PDO::FETCH_ASSOC);
foreach($hola as $row){
    echo "hola";
    echo $row['nombre'];
}
