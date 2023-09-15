<?php

$coches = array('Polo', 'Golf', 'kicks');
$numeros = [11,12,13,18,15,9,8];
$marcasCoches = array ('Nissan', 'Volkswagen', 'toyota','ford', 'Chevrolet');

//Ordenar
arsort($numeros);
//var_dump($numeros);

//sintaxis para añadir elementos a un array//
$coches [] = 'accord';

array_push($coches, 'sedan');

//Sintaxis para eliminar elementos a un array//
array_pop($coches);
//quitar un elemento determinado
unset($coches[1]);


//array aleatorio, funcion para tomar un elemento de un array de forma aleatoria
$coche = array_rand($coches);

echo $coches[$coche];

//var_dump($coches);
echo "</br>";
//dar la vuelta a un array, es decir ordenar los valores de forma inversa
//var_dump(array_reverse($coches));

//sintaxis para buscar dentro de un array
$resultBusqueda = array_search('Chevrolet', $marcasCoches);
var_dump($resultBusqueda);

//funcion para contar los elementos de los array

echo count($marcasCoches);

/*
    Este seria un alias de count
    echo sizeof($marcasCoches);

    Existen mas metodos como los antes descritos, pero de forma de practica estos estos serian
    los mas comunes que podemos usar, si queremos algun metodo para algo mas en especifico
    entonces pudieramos buscar dentro de la documenatacion de php mas metodos utilis que 
    quisieramos usar
*/
