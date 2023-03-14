<?php
class SessionesModel
{
    function __construct()
    {
        session_start();
        $_SESSION["nombre"] = "";
    }

    public function setSession($nombre)
    {
        $_SESSION["nombre"] = $nombre;
    }

    public function getSession()
    {
        return $_SESSION["nombre"];
    }

    public function destroySession()
    {
        session_unset();
        session_destroy();
    }
}
