<?php

//FUNCIONES
//EJEMPLO 1
function nombreDeMiFuncion()
{
    echo "Gerardo" . '<br/>';
    echo "Guille" . '<br/>';
    echo "Rodri" . '<br/>';
    echo "Mati" . '<br/>';
    echo "Rafa" . '<br/>';
}
nombreDeMiFuncion();
echo '<hr>';
//EJEMPLO 2
function tabla($num)
{
    echo "<h3>Tabla de multiplicar del numero: $num </h3>";
    for ($i = 1; $i <= 10; $i++) {
        $operacion = $num * $i;
        echo "$num * $i = $operacion <br/>";
    }
}
if (isset($_GET['num'])) {
    tabla($_GET['num']);
    echo '<hr>';
    tabla(4);
} else {
    echo "No hay numeros para multiplicar";
}
echo '<hr>';
//EJEMPLO 3
function calculadora($num1, $num2, $negrita = false)
{
    $suma = ($num1 + $num2);
    $resta = ($num1 - $num2);
    $div = ($num1 / $num2);
    $mul = ($num1 * $num2);

    $cadenaTexto = "";

    if ($negrita) {
        $cadenaTexto .= "<h1>";
    };

    $cadenaTexto .= "<u><h3>CALCULADORA</h3></u>";
    $cadenaTexto .= "SUMA: $suma" . '<br/>';
    $cadenaTexto .= "RESTA: $resta" . '<br/>';
    $cadenaTexto .= "DIVISION: $div" . '<br/>';
    $cadenaTexto .= "MULTIPLICACION: $mul" . '<br/>';

    if ($negrita) {
        $cadenaTexto .= "</h1>";
    };

    $cadenaTexto .= '<hr/>';

    return $cadenaTexto;
}

calculadora(2, 5, true);


//EJEMPLO 4
function getNombre($nombre)         //OBTENGO EL NOMBRE
{
    $texto = "El nombre es: $nombre";
    return $texto;
}
function getApellido($apellido)   //OBTENGO APELLIDO
{
    $texto = "El apellido es: $apellido";
    return $texto;
}
function devuelveNombreYApellido($nombre, $apellido)
{
    $texto = getNombre($nombre) // LLAMO 2 FUNCIONES DENTRO DE UNA
        . "<br/>" .
        getApellido($apellido);
    return $texto;
}
echo devuelveNombreYApellido("Gerardo Javier", "García"); //LE PASO LOS VALORES
