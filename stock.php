<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

ini_set('display errors', 1);
ini_set('display_startup_errors',1);

error_reporting(E_ALL);

$stock = 800;

if($stock > 0){
    echo "Hay stock";
} else {
    echo "No hay stock";
}


?>