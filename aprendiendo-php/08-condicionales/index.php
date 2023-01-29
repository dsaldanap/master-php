<?php

/* 
//CONDICIONAL IF
IF:
 if{condicion} {              *****************
    instrucciones             * SINTAXYS "IF" *
} else {                      *****************
    otras instrucciones
}

***************************************************************************

// OPERADORES DE CONDICION
==   igual
===  identico
!=   diferente
<>   diferente
!==  no identico
<    menor que
>    mayor  que
<=   menor o igual que
>=   mayor o igual que

****************************************************************************
 
//Operadores Logicos

**************************************
* CODIGO  *  OPERADOR *  SIGNIFICADO *
**************************************
*  &&     *    AND    *       Y      *
**************************************
*  ||     *    OR     *       O      *
**************************************
*  !      *    NOT    *       NO     *
**************************************
* and, or *                          *
**************************************


*/

//ejemplo 1
$color = 'verde';
if($color == 'rojo') {
    echo 'el color si es rojo';
}  else {
    echo 'el color no es rojo';
}
echo "<br>";

//ejemplo 2
$year = 2015;
if($year >= 2019) {
    echo "Es una año igual o mayor a 2019";

    
} else {
    echo "Es un año menor a la fecha 2019";
}
// ejemplo 3
$nombre = "David Tavares";
$ciudad = "CDMX";
$continente = "Europa";
$edad = 30;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    
    if($continente == "Amarica del Norte"){
        echo "<h2>Y es de $ciudad</h2>";
    }else{
        echo "<h2>No es de America del Norte</h2>";
    }
} else {
    echo "<h1>$nombre no es mayor de edad</h1>";
}

echo "<br />";
echo "<hr />";

//Ejemplo 4
$dia = 6;

/*
if ($dia == 1){
    echo "Es lunes";
}  else {
    if($dia == 2){
        echo "Es martes";
    }  else {
        if($dia == 3){
            echo "Es miercoles";
        }  else {
            if($dia == 4){
                echo "Es jueves";
            }  else {
                if($dia == 5){
                    echo "Es viernes";
                } else {
                    echo "Es fin de semana";
                }  
            }
        }
    }
}
*/

if($dia == 1){
    echo "Lunes";
}elseif ($dia == 2) {
echo "MARTES";
}elseif ($dia == 3 ) {
    echo "MIERCOLES";
}elseif ($dia == 4) {
    echo "JUEVES";
}elseif ($dia == 5) {
    echo "VIERNES";
}  else {
    echo "Es fin de semana";
}

echo "<br />";
echo "<hr/>";

//SWITCH

$dia = 10;

switch ($dia){
    case 1:
        echo "Es dia lunes";
        break;
    case 2:
        echo "Es dia martes";
        break;
    case 3:
        echo "Es dia Miercoles";
        break;
    case 4:
        echo "Es dia Jueves";
        break;
    case 5:
        echo "Es dia viernes";
        break;
    default:
        echo "Ya estamos en fin de semana";
}

echo "<br />";
echo "<hr/>";

//Eejemplo 5

$edad1 = 18;
$edad2 =64;
$edadOficial = 12;

     //ejemplo para hacer cumplir dos condiciones
if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo "Esta persona esta en edad de trabajar";
}  else {
    echo "Esta persona no tiene permitido trabajar";
}

echo "<hr />";

$pais = "portugal";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo " En $pais se habla el idioma Español";
}  else {
    echo " En $pais no se habla el idioma Español";
}

echo "<br />";
echo "<hr/>";

/*

sintaxys GOTO
 ***********************************************************************
 *                                                                     *
 * esta sintaxys ayuda a generar un salto, que evita que no se ejecute *
 * un  bloque de instrucciones                                         *
 *                                                                     *
 ***********************************************************************

   */
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";


marca:
echo "me he saltado 4 echos";