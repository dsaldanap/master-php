<?php

/* 
Ejercicio 5 -> hacer un programa que muestre todos los numeros entre dos numeros
que nos lleguem por la URL($_GET)
 */

//var_dump($_GET);
if(isset($_GET['numero1']) && (isset($_GET['numero2']))) {
    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];
        if($numero1 < $numero2){
            for($d = $numero1; $d <= $numero2; $d++){
                echo "$d" . "<br />";
            }
        }  else {
            echo "El numero $numero1 es mayor a el numero $numero2";
        } 
    } else {
        echo "Ingresar dos numeros por la URL";
    }


    
