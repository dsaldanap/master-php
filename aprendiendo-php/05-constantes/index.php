<?php

/* 
 ***********************************************************
 * * constantes =>                                         *
 * es un contenedor de la informacion que no puede variar  *
 *                                                         *
 ***********************************************************
 */

define('nombre', 'Donovan Saldaña');
define('web', 'dsp.com');

echo '<h1>' . nombre . '</h1>';
echo '<h1>' . web . '</h1>';

//Variable

$web = "dsp.com/academy";
echo '<h1>' . $web . '</h1>';


//constantes predefinidas

echo PHP_OS . '</br>';
echo PHP_VERSION . '</br>';
echo PHP_EXTENSION_DIR . '</br>';
echo __LINE__ . '</br>';
echo __FILE__ . '</br>';
function holaMundo (){
    echo __FUNCTION__;
}
holaMundo();
?>