<?php
/*
// VARIABLES GLOBAL:

$frase = "Los grandes no descienden";

function variablesGlobales()
{
    global $frase;          //DECLARO LA VARIABLE COMO GLOBAL
    echo "<h1>$frase</h1>";
    $ano = 2022;
    echo "<h1>$ano</h1>";
    return $ano;
}
variablesGlobales();

//FUNCIONES VARIABLES

function buenasDias(){
    return "HOLA BUENOS DÍAS";
}
function buenasTardes(){
    return "HOLA BUENAS TARDES";
}

function buenasNoches(){
    return "HOLA BUENAS NOCHES";
}

$horario = $_GET['horario'];
$miFuncion = "buenas".$horario;
echo $miFuncion();
*/

//////////  FUNCIONES PREDEFINIDAS  //////////

//DEBUGEAR
$nombre = "Riquelme";
var_dump($nombre);
//FECHAS
echo date('06-03-93');
echo "<br/>";
//TIME 
echo time();
// MATEMATICAS
echo "<br/>";
echo "Sacar raiz cuadrada de 10" . sqrt(10);
echo "<br/>";
echo "Numero aleatorio entre 10 y 50: " . rand(10, 50);
echo "<br/>";
echo "Redondear: " . round(7.8954, 2);
echo "<br/>";

echo gettype($nombre);    //gettype muestra el tipo de dato
// DETECTAR TIPADO
echo "<br/>";
if (is_string($nombre)) {
    echo "$nombre ES UN STRING";
} else {
    echo "NO ES UN STRING";
}

// FUNCION ISSET: AVERIGUAMOS SI UNA VARIABLE EXISTE DENTRO DE NUESTRO PROGRAMA
echo "<br/>";

$edad = 29;

if (isset($edad)) {
    echo "La variable edad existe";
} else {
    echo "la variable edad no existe";
}

$frase = "         boca juniors          ";

var_dump(trim($frase));      // funcion TRIM elimina los espacios innesesarios.


//ELIMINAR VARIABLES / INDICES     - UNSET
$ano = 10;
unset($ano);

//COMPROBAR VARIABLE VACIA   - EMPTY
$texto = "jajaja";
if (empty($texto)) {
    echo "variable esta vacia";
} else {
    echo "la variable texto tiene contenido";
}
echo "<br/>";
//CONTAR CARACTERES DE UNA CADENA/STRING      - STRLEN
$cadena = "12345";
echo strlen($cadena);
echo "<br/>";
// ENCONTRAR UN CARACTER EN UNA FRASE          - STRPOS
$frase = "Patrico Rey y sus Redonditos de Ricota";
echo strpos($frase, "Ricota");
echo "<br/>";
// REMPLAZAR LAPABRAS DE UN STRING            -STR_REPLACE
echo str_replace("Ricota", "Membrillo", $frase);
echo "<br/>";
//CONVERTIR EN MAYUSCULAS Y MINUSCULAS   
echo strtolower($frase);       //MINUSCULAS - STROLOWER
echo "<br/>";
echo strtoupper($frase);        //MAYUSCULAS - STRTOUPPER
