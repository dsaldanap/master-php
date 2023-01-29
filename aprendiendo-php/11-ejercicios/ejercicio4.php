<?php

/* 
Ejercicio 4-> Recoger dos numeros por la URL (Parametro GET) y hacer todas las
operaciones basicas de una calculadora (suma, resta, multiplicacion y division)
de esos dos numeros
 */

//var_dump($_GET);
if(isset($_GET['calculadora1']) && (isset($_GET['calculadora2'])) ){
    $calculadora1 = (int) $_GET['calculadora1'];
    $calculadora2 = (int) $_GET['calculadora2'];
    
    echo "<h2>calculadora</h3>";
    echo "<h3>";
    echo "La suma es: " . ($calculadora1+$calculadora2) . "<br />";
    echo "La resta es: " . ($calculadora1-$calculadora2) . "<br />";
    echo "La multiplicacion es: " . ($calculadora1*$calculadora2) . "<br />";
    echo "La division es: " . ($calculadora1/$calculadora2) . "<br />";
    echo "</h3>";
    }  else {
    echo 'Ingresa un numero por la URL';
}

