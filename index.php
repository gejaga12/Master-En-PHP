<?php

// VARIABLES 
$variable = "hola desde una variable";
$numero= 10;
$verdadero = true;
echo '<h1>'.$variable.'</h1>';
echo '<h1>'.$numero.'</h1>';

//TIPOS DE DATOS
$num = 9;
$decimal =15.1;
$texto = "Boca Juniors";
echo gettype($num);
echo gettype($decimal);
echo gettype($texto);

//DEBUGUEAR
$mi_nombre= "Gerardo Javier García";
var_dump($mi_nombre);
$array[]="Perro";
$array[]="Gato";
$array[]="Vaca";
var_dump($array);

//CONSTANTES
define('nombre', "Gerardo");
define('web', "gejaga12");
echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//CONSTANTES PREDEFINIDAS
echo PHP_OS;
echo PHP_VERSION;

//OPERADORES ARIGMETICOS
$numero1 = 50;
$numero2 = 40;
echo '<h1> SUMA: '.($numero1 + $numero2).'</h1><br/>';
echo '<h1> RESTA: '.($numero1 - $numero2).'</h1><br/>';
echo '<h1> MULTIPLICACION: '.($numero1 * $numero2).'</h1><br/>';
echo '<h1> DIVISION: '.($numero1 / $numero2).'</h1><br/>';
echo '<h1> RESTO: '.($numero1 % $numero2).'</h1><br>';

//OPERADORES INCREMENTO Y DECREMENTO
$ano= 2022;
$ano++;       
echo '<h1>'.$ano.'</h1>';
$ano--;
echo '<h1>'.$ano.'</h1>';

//OPERADORES DE ASIGNACION
$edad = 20;
echo $edad.'<br>';
echo ($edad+=5).'<br/>'; 
echo ($edad-=10).'<br/>'; 
var_dump($edad);

//VARIABLES DEL SERVIDOR
echo '<h1>';
echo $_SERVER['SERVER_ADDR']; //obtener IP
echo '</h1>';
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //obtener software
echo '</h1>';
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //obtener navegador
echo '</h1>';

//VARIABLES SUPERGLOBALES
$_GET;
$_POST;

























?>