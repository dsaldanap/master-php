<?php

/* 
Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
(un numero multiplicado por si mismoo) de los 40 primeros numeros naturales.
Utilizar bucle WHILE
 */
/*
$cuadrado = 0;

while ($cuadrado <= 40){
    $resultado = ($cuadrado*$cuadrado);
    echo " el cuadrado de $cuadrado es $resultado"."<br>";
    $cuadrado++;
    
*/


for ($cuadrado = 0; $cuadrado <= 40; $cuadrado++) {
    $resultado = ($cuadrado*$cuadrado);
    echo "El cuadrado de $cuadrado es el numero $resultado" . "<br>";
}

