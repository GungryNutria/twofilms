<?php

    public class Conexion{

        public function crearConexion(){
              
            $dbHost = "localhost";  
            $dbName = "db_two_film";  
            $dbUser = "root"; 
            $dbPassword = "admin";
            try{  
                $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);  
                Echo "Connected"; 
                return $dbConn;

            } catch(Exception $e){  
                Echo "Not connected, check " . $e->getMessage();  
                return null;
            }    
  
        }

        public function cerrarConexion($dbConn){
            $dbConn = null;
            Echo "Disconnected"; 
        }

    }

?>