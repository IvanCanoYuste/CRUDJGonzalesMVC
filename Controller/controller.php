<?php

require_once("../Model/Connector.php");
$conexion = new Connector;

$respuesta = [];

if(isset($_POST["seleccion"])) {
    switch($_POST["seleccion"]) {
        case "peliculas":
            require_once("../Model/peliculas.php");

            $respuesta = peliculas_dramaticas($conexion);

            require_once("../View/peliculasView.php");
            break;

        case "actrices":
            require_once("../Model/actor.php");
    
            $respuesta = nombre_actrices($conexion);
            require_once("../View/actrices.php");
            break;

    }
}
