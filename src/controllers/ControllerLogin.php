<?php
include "../models/SessionModel.php";
include "../daoimpl/UserDaoImpl.php";
$UserDaoImpl = new UserDaoImpl();
$session = new SessionesModel();
$correo = $_POST["email"];
$password = $_POST["password"];
$existe = $UserDaoImpl->user($correo, $password);
if ($existe) {
    $nombre = $existe["nombre"] . " " . $existe["apellido_p"] . " " . $existe["apellido_m"];
    $session->setSession($nombre);
    $session->destroySession();
} else {
    echo "no tienen nada";
    $session->destroySession();
}
