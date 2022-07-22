<?php

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['Indio Solari', 'Chizzo Napolitano', 'Mick Jagger', 'Ricador Iorio', 'Luca Prodam'];


echo $peliculas[0];
echo "<br/>";
echo $peliculas[2];

echo "<h1>Listado de Cantantes con FOR</h1>";
// RECORRO EL ARRAY CON BUCLE FOR
echo "<ul>";
for ($i = 0; $i < count($cantantes); $i++) {
    echo "<li>" . $cantantes[$i] . "</li>";
}
echo "</ul>";

echo "<h1>Listado de Cantantes con FOREACH</h1>";
// RECORRO EL ARRAY CON BUCLE FOREACH
echo "<ul>";
foreach ($cantantes as $cantante) {     //recorro el array $cantantes y a cada iteracion crea una variable $cantante con el contenido de ese Indice.
    echo "<li>" . $cantante . "</li>";
}
echo "</ul>";
// ARRAY ASOCIATIVO
echo "<h1>Array creando indices propios</h1>";
$personas = array(
    'nombre' => 'Martin',
    'apellido' => 'Palermo',
    'profesion' => 'Director Tecnico',
);
var_dump($personas);
var_dump($personas['apellido']);

// ARRAY MULTIDIMESIONALES
$contactos = array(
    array(
        'nombre' => 'Juan Roman Riquelme',
        'email' => 'juanroman10@hotmail.com'
    ),
    array(
        'nombre' => 'Carlos Tevez',
        'email' => 'carlostevez@hotmail.com'
    ),
    array(
        'nombre' => 'Martin Palermo',
        'email' => 'martinpalermo9@hotmail.com'
    ),
);

var_dump($contactos);
// para acceder a un determinado 'nombre/email' seria de la siguiente forma
echo $contactos[1]['nombre'];
echo $contactos[1]['email'];

foreach ($contactos as $key => $contacto) {
  var_dump($contacto['nombre']);
}


