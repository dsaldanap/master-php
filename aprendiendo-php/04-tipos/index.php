<?php

/*
 * TIPOS DE DATOS
 * Entero (int / integer) = 99 
 * Coma flotante / decimales (float / double) = 3.45
 * Cadenas (string) = "Hola yo soy un string"
 * Boleano (bool = true / false)
 * null
 * array (coleccion de datos)
 * Objetos
 */


$numero = 100;
$numero_hola = 99;
$decimal = 27.9;
$texto = "soy un texto $numero_hola";
$verdadero = true;
$nula = null;

echo gettype($nula);

// debugear

$mi_nombre = "Donovan Saldaña";
var_dump($mi_nombre);
?>