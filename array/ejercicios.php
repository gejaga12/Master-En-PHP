<?php

// CREAR EL ARRAY
$numeros = array(10, 20, 30, 40, 50, 60, 70, 80);

//FUNCIONES
function mostrarArray($numeros)
{
    $resultado = "";
    foreach ($numeros as $numero) {
        $resultado .= $numero . "<br/>";
    }
    return $resultado;
}

// RECORRER Y MOSTRAR ARRAY
echo "<h3>RECORRER Y MOSTRAR ARRAY</h3>";
echo mostrarArray($numeros);

// ORDENAR Y MOSTRAR
