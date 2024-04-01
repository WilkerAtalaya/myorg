<?php
function conectarDB():mysqli{
        $db = mysqli_connect('sql870.main-hosting.eu','u866313655_rubendqv','Chanchito*123','u866313655_cesip');
        if(!$db){
            echo "Error no se puede conectar";
           exit;
        }
        return $db;
}