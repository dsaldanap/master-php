<?php

//Operadores aritmeticos
$numero1 = 65;
$numero2 = 33;

echo 'suma: ' . ($numero1 + $numero2) . '<br/>';
echo 'Resta: ' . ($numero1 - $numero2) . '<br/>';
echo 'multiplicacion: ' . ($numero1 * $numero2) . '<br/>';
echo 'Division: ' . ($numero1 / $numero2) . '<br/>';
echo 'Resto: ' . ($numero1 % $numero2) . '<br/>';

//Operadores incremento y decremento
$year = 2019;

//Incremento´
//$year = $year + 1;
$year++;

//Decremento
//$year = $year - 1;
$year--;

//Pre incremento
//$year = 1 + $year;
++$year;

//Pre decremento
//$year = 1 - $year;
--$year;

echo "<H1>$year</H1>";

//Operadores de Asignacion
$edad = 55;

echo $edad.'<br/>';

//$edad = $edad + 1;
echo ($edad+=5).'<br/>';
echo ($edad-=5).'<br/>';
echo ($edad/=5).'<br/>';
echo ($edad*=5).'<br/>';


