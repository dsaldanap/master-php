<?php

/* 
Ejercicio 2 -> escribir un script en php que nos devuelva por pantalla 
todos los numeros pares que hay del 1 al 100.
 */

for($x = 1; $x <= 100; $x++){
    if($x%2 == 0){
    echo "$x" . "<br/>";
    }
}

