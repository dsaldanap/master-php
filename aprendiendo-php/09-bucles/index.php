<?php

/*BUCLE WHILE
  Es una estructura de control que itera o repite la ejecucion de una serie de
instrucciones tantas veces como sea necesario, en base a una condicion

***********************************************
*                                 *           *
* while(condicion) [              *           *
*        bloque de instrucciones  *           *
*        otra instruccion         *  sintaxis *
*  }                              *           *
*                                 *           *
***********************************************

*/

$numero = 0;

while ($numero <= 100) {
    echo $numero;
        if($numero != 100){
            echo ", ";
        }
    $numero ++;
    
}
echo "<hr/>";
//Ejemplo

if(isset($_GET['numero'])){
    ///// cambiar tipo de dato//////
    $numero = (int)$_GET["numero"];
}  else {
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero<h1/>";

$contador = 1;
while($contador <= 10){
    echo "$numero x $contador = ". ($numero*$contador) ."<br/>";
    $contador++;
}


/*BUCLE DO WHILE
  Es una estructura de control que itera o repite la ejecucion de una serie de
instrucciones tantas veces como sea necesario, en base a una condicion

***********************************************
*                                 *           *
* do{                             *           *
*   bloque de instrucciones       *           *
* }                               *           *
* while(condicion) [              * sintaxis  *
*        bloque de instrucciones  *           *
*        otra instruccion         *           *
*  }                              *           *
*                                 *           *
***********************************************

*/

echo "<hr/>";


$edadPersona = 10;
$local = 1;
do{
    echo "Jose tienes acceso al siguiente local privado $local" . "<br/>";
    $local++;
}while ($edadPersona >= 18 && $local <= 10 );