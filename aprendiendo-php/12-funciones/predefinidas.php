<?php
//Debuggear
$nombre = 'Donovan Saldaña';
var_dump($nombre);

// fechas
echo date('d-M-Y');
echo '<br />';
echo time();

// Matematicas
echo '<br />';
echo "Raiz cuadrada de 10" . sqrt(10);
echo '<br />';
echo "Numero aleatorio entre 10 y 40: " . rand(10, 40);
echo '<br />';
echo "Numero pi " . pi();
echo '<br />';
echo 'Redondear: ' . round(7.891234, 2);

// mas funciones generales
echo '<br />';
echo gettype($nombre);

// Detectar tipos
echo '<br />';
if (is_string ($nombre)) {
    echo "esa variable es un string";
}

//  Comprobar si existe una variable
if (is_float ($nombre)) {
    echo 'la variable nombre no es una variable con decimales';
}
echo '<br />';
if (isset($nombre)) {
    echo 'La variable existe';
}else{
    echo 'La variable no existe';
}

// Limpiar espacios
echo '<br />';
$frase = '      mi contenido      ';
var_dump(trim($frase));
echo '<br />';

//eliminar variables o indices de arrays
$year = 2020;
//unset($year);
var_dump($year);

//comprobar variable vacia

$texto = '   ff   ';
if(empty(trim($texto))){
    echo 'La variable esta vacia';
}else{
    echo 'La variables texto tiene contenido';
}

//Contar careacteres de un string
echo '<br />';
$cadena = '12345';
echo strlen($cadena);

//encontrar caracter
echo '<br />';
$cadena = 'La vida es bella';
echo strpos($cadena, 'vida');

// Remplazar palabras de un string
echo '<br />';
$frase = 'La vida es bella';


?>