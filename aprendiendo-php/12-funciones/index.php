<?php

/* 
FUNCIONES: 
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutulizarce solamente invocando a la funcion tantas veces como
queramos

function nombreDeMiFuncion("parametros"){
    // bloque / conjunto de instrucciones
}

nombreDeMiFuncion($miparametro);
nombreDeMiFuncion($miparametro);
 */

// Ejemplo 1
function muestraNombres(){
    echo "Donovan Saldaña" . "<br />";
    echo "Alan Saldaña" . "<br />";
    echo "David Saldaña" . "<br />";
    echo "Fernando Saldaña" . "<br />";
    echo "<hr />";
}
/*
//Invoca Funcion
muestraNombres();
muestraNombres();
muestraNombres();
*/

//Ejemplo 2
function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero<h3/>";
        for($i = 1; $i <= 10; $i++){
            $operacion = $numero*$i;
            echo "$numero x $i = $operacion <br />";
        }
}
/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}  else {
    echo "No hay numero para hacer la tabla";
}
*/
/*
for ($d = 1; $d <= 10; $d++){
    tabla($d);
}
*/
echo "<hr />";


//comentario para prueba de git
//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){
    //conjunto de instrucciones a ejecutar
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1/$numero2;
    
    $cadenaTexto = "";
    
    if($negrita){
        $cadenaTexto .= "<h1>";
    }
    
    $cadenaTexto .= "suma: $suma" . "<br />";
    $cadenaTexto .= "resta: $resta" . "<br />";
    $cadenaTexto .= "multplicacion: $multiplicacion" . "<br />";
    $cadenaTexto .= "division: $division" . "<br />";
    
    if($negrita){
        $cadenaTexto .= "</h1>";
    }
    $cadenaTexto .= "<hr />";
    
    return $cadenaTexto;
}
    
echo calculadora(50,30,true);
//echo calculadora(80,30,true);

echo "<br />";

//Ejemplo 4

function getNombre($nombre){
    $texto = "El  nombre es: $nombre";
    return $texto;
}

function getApellido($apellidos){
    $texto = "Los apellidos son : $apellidos";
    return $texto;
}

function devuelveElNombre($nombre,$apellidos){
    $dsp = getNombre($nombre)
            . "<br />"
            . getApellido($apellidos);
    return $dsp;
}

echo devuelveElNombre('Donovan','Saldaña Palomar');



