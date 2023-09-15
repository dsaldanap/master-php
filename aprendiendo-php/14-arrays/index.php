<?php
/*
    ARRAYS

    los arrays son elementos que basicamente se les conoce como coleccion de datos,
    es decir, son variables que almacenan mas de un dato o valor y la manera de acceder
    a sus valores es por medio de un indice numerico o alfanumerico

*/

$coches = array('Polo', 'Golf', 'kicks');
$marcasPantalones = ['Levis', 'Oggi', 'lee'];

/* 
    para recorrer los arrays existen dos formas, la primera es realizarlo por medio de un bucle
    que este seria el for y la segunda que mas se utiliza para los arrays es el foreach
*/

//for

echo "<h1>listado de coches</h1>";


for($i = 0; $i < count($coches); $i++){
    echo $coches[$i];
    echo "</br>";
}

echo "</br>";

//recorrer con foreach
echo "<h1>listado de pantalones</h1>";

foreach ($marcasPantalones as $resultadoRecorrido){
    echo $resultadoRecorrido;
    echo "</br>";
}

//arrays asosiativos

$nomPerros = array(
    'perro1' => 'Pulgas',
    'perro2' => 'Kiara',
    'perro3' => 'Manchas',
    'perro4' => 'vainilla'
);


echo $nomPerros['perro3'];

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

//var_dump($_GET);

/*
    Forma de declarar un array asosiativo, esto quiere decir que esros arrays
    son una forma de almacenar en una variable mas de un array
*/
//array asosiativo

$contactos = array(
    array(
        'nombre' => 'Saul',
        'email' => 'saul@saul.com'
    ),
    array(
        'nombre' => 'alejandro',
        'email' => 'alejandro@alejandro.com'
    ),
    array(
        'nombre' => 'francisco',
        'email' => 'francisco@francisco.com'
    ),
    array(
        'nombre' => 'raul',
        'email' => 'raul@raul.com'
    )
);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}
?>