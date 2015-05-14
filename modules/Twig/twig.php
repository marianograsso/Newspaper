<?php
include "../modules/Twig/Autoloader.php";
Twig_Autoloader::register();
//Edito $loader = new Twig_Loader_Filesystem("../template"); por view para que el arbol de directorios quede mas ordenado
$loader = new Twig_Loader_Filesystem("../views");
$twig = new Twig_Environment($loader, array(
    // 'cache' => "cache",
));
?>
