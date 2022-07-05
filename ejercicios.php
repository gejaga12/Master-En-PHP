<?php
/*

// EJERCICIO 1 
$pais = 'Argentina';
$continente = 'America del sur';
echo "El pais es $pais y el continente es $continente";
echo '<hr>';
// EJERCICO 2
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
}

// EJERCICO 3
$cont=0;
while ($cont <= 40){
    $cuadrado = $cont * $cont;
    echo "<h3>El cuadrado de $cont es: $cuadrado</h3>";
    $cont++;
}

//EJERCICIO 4
if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "SUMA: ".($num1+$num2)."<br/>";
    echo "RESTA: ".($num1-$num2)."<br/>";
    echo "DIVIDIDO: ".($num1/$num2)."<br/>";
    echo "MULTIPLICACION: ".($num1*$num2)."<br/>";

} else {
    echo "<h1>Introduce correctamente los valores por URL</h1>";
}

// EJERCICIO 5
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    for ($i = $num1; $i <= $num2; $i++) {
        echo "<h4>$i</h4>";
    }
} else {
    echo '<h1>LOS PARAMETROS GET NO EXITEN</h1>';
}


// EJERCICO 6 
//Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10

echo "<table border='1'> <tr>";    //inicio de la tabla
echo "<tr>";                      //inicio fila 1 de celdas      
for ($cabecera = 1; $cabecera <= 10; $cabecera++) {
    echo "<td> TABLA DEL $cabecera </td>";
}
echo "</tr>";                      //fin fila 1 de celdas  
echo "<tr>";                      //inicio fila 2 de celdas
for ($i = 1; $i <= 10; $i++) {
    echo "<td>";
    for ($x = 1; $x <= 10; $x++) {
        echo "$i x $x = " . ($i * $x) . "<br/>";
    }
    "</td>";
}
echo "</tr>";                      //fin fila 2 de celdas 
echo "</table>";                   //fin de la tabla


// EJERCICIO 7
if (isset($_GET['num1']) && isset($_GET['num2'])) {  // comprobamos que llegan los parametros por la URL
    $num1 = $_GET['num1']; //inicializamos variables con los valores que llegan por la URL
    $num2 = $_GET['num2'];
    echo "<h1>Los numeros impares del $num1 al $num2 son: </h1>";
    for ($i = $num1; $i <= $num2; $i++) { //compruebo que el num1 sea menor que el num2 y hacemos el bucle

        if ($i % 2 != 0) {  // obtengo los numeros impares
            echo "<h4>$i ES IMPAR</h4>";  // muestro numeros impares
        }else {
            echo "<h4>$i ES PAR</h4>";  // muestro numeros pares
        }
    }
} else {
    echo '<h1>LOS PARAMETROS GET NO EXITEN</h1>';
}
*/