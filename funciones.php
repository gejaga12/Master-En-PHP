<?php

//FUNCIONES
function nombreDeMiFuncion()
{
    echo "Gerardo".'<br/>';
    echo "Guille".'<br/>';
    echo "Rodri".'<br/>';
    echo "Mati".'<br/>';
    echo "Rafa".'<br/>';
}
nombreDeMiFuncion();

function tabla($num){
    echo "<h3>Tabla de multiplicar del numero: $num </h3>";
    for($i=1; $i <=10; $i++){
        $operacion= $num*$i;
       echo "$num * $i = $operacion <br/>";
    }
}
tabla(2);
