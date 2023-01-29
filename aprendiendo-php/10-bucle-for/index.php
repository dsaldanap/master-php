<?php

/*FOR
for(declaracion variable contador, condicion, actualizando variable contador){
    //bloque de instrucciones
}
*/

/*
$resultado = 0;
for ($i = 0; $i <= 100; $i++) {
    $resultado = $resultado + $i;
    echo "$resultado, ";
    //$resultado += $i;  ->Esta expresion es igual a la de la linea 11
}
echo "<h1>El resultado es: $resultado<h1/>";
*/

if(isset($_GET['numero'])){
    ///// cambiar tipo de dato//////
    $numero = (int)$_GET["numero"];
}  else {
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero<h1/>";


for($contador = 1; $contador <= 10; $contador++){
    if ($numero >= 11 and $numero <= 100){
        echo "Solo  ingresar numeros del 1 al 10";
        break;
    }
    echo "$numero x $contador = ". ($numero*$contador) ."<br/>";
}