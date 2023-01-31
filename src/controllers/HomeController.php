<?php
include '../daoimpl/HomeDaoImpl.php';
class HomeController{
    $homeDaoImpl;
    function __construct() {
        $this->homeDaoImpl = new HomeDaoImpl();
    }
}
?>