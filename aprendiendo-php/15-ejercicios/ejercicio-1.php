<?php

/*
    Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
    y que haga lo siguiente

    - Recorrelo y mostrarlo
    - Ordenarlo y mostrarlo
    - Mostrar su longitud
    - Buscar algun elemento
*/

//funciones
function mostrarArray($numeracion){
    
}

$numeracion = array (13,21,9,33,34,5,8,40);

foreach($numeracion as $mostrarNumeracion){
    echo $mostrarNumeracion . "\n";
}

foreach($numeracion as $resultNum){
    sort($numeracion);
    echo $resultNum;
}