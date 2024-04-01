<?php

require_once(__DIR__ . '/../app/appAdminIndex.php');
function TemplateAdminIndex(string $nombre,bool $inicio = false){
    include TEMPLATES_URL."/${nombre}.php" ;
}

function estaAutenticado():bool {
    session_start();
    $auth = $_SESSION['login'];
    if($auth){
        return true;
    }else{
        return false;
    }
}