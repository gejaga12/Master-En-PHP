<?php
// FUNCIONES CON ARRAY

$cantantes = ['Indio Solari', 'Chizzo Napolitano', 'Mick Jagger', 'David Gilmour', 'Luca Prodam'];
// $numeros = [51, 20, 3, 48, 56, 6, 77, 1, 8, 98];

// sort($numeros);      // ASORT ORDENA DE MENOR A MAYOR
// var_dump($numeros);
asort($cantantes);    // ASORT ORDENA ALFABETICAMENTE
echo "<h3>ORDENO ALFABETICAMENTE INDICES DEL ARRAY CON ASORT</h3>";
var_dump($cantantes);

// MODIFICAR ELEMENTOS A UN ARRAY
echo "<h3>AÑADO ELEMENTOS AL ARRAY</h3>";
$cantantes[] = "Robert Smith"; //AÑADO ELEMENTOS AL ARRAY
var_dump($cantantes);
echo "<h3>AÑADO ELEMENTOS AL ARRAY CON PUSH</h3>";
array_push($cantantes, "Kurt Cobain");  //AÑADO ELEMENTOS AL ARRAY
var_dump($cantantes);
echo "<h3>ELIMINO EL ULTIMO INDICE DEL ARRAY CON POP</h3>";
array_pop($cantantes); // ELIMINO EL ULTIMO INDICE DEL ARRAY
var_dump($cantantes);
echo "<h3>ELIMINO UN INDICE EN ESPECIFICO CON UNSET</h3>";
unset($cantantes[1]); // ELIMINO UN INDICE EN ESPECIFICO
var_dump($cantantes);

echo "<h3>ELIMINO UN INDICE ALEATORIO CON ARRAY_RAND</h3>";
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//BUSCAR DENTRO DEL ARRAY     
echo "<h3>BUSCO UN ELEMENTO ESPECIFICO CON ARRAY_SERCH</h3>";
$resultado = array_search('Mick Jagger', $cantantes);
var_dump($resultado);

//CONTAR NUMERO DE ELEMENTOS
echo count($cantantes);
















