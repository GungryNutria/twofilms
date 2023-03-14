<?php
include "../dao/User.php";
include "ConexionDb.php";

class UserDaoImpl implements User
{
    private $db;

    function __construct()
    {
        $this->db = new Conexion();
    }

    public function user($correo, $password)
    {
        try {
            $consulta = "SELECT * FROM tb_usuario WHERE correo = :correo AND pass = :password";
            $pdo = $this->db->crearConexion();
            $resultado = $pdo->prepare($consulta);
            $resultado->execute([":correo" => $correo, ":password" => md5($password)]);
            $registro = $resultado->fetch();
            return $registro;
        } catch (Exception $e) {
            echo "Hubo un error de tipo: $e";
            return null;
        }
    }
}
