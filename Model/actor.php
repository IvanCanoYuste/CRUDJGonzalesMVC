<?php

function nombre_actrices($conexion){
        $results = $conexion->query("Select nombre_apellidos from actor where sexo = 'f' ");
        
        return $results->fetchAll(PDO::FETCH_COLUMN);
    }

?>