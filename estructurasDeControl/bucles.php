<?php
// BUCLE WHILE (mientras)

//EJEMPLO 1
$numero = 0;
while ($numero <= 100) {
    echo $numero;
    if ($numero != 100) {
        echo ", ";
    }
    $numero++;
}

//EJEMPLO 2

if (isset($_GET['numero'])) {
    //cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo '<hr>';
echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br/>";
    $contador++;
}

echo '<hr>';

// DO WHILE 
$edad = 15;
$cont = 1;

do {
    echo "Tiene acceso al local privado $cont <br/>";
    $cont++;
} while ($edad >= 18 && $cont <= 10);

// BUCLE FOR
$resultado=0;
for ($i=0; $i <=100; $i++){
$resultado += $i;
}
echo "<h1> El resultado es: $resultado </h1>";

// EJEMPLO TABLA CON FOR
echo "<h1>Tabla de multiplicar del numero $numero</h1>";
for($contador = 1; $contador <= 10; $contador++){
if($numero == 45){
    echo "No se pueden mostrar estas operaciones prohibidas";
    break;
}
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}
















