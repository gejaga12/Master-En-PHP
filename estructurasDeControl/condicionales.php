<?php
//OPERADORES DE COMPARACION
//  == igual
//  === identico
//  != distinto/diferente
//   <> diferente
//   !== no identico
//   < menor que
//   > mayor que
//   <= menor o igual que
//   >= mayor o igual que

//CONDICIONALES IF

//EJEMPLO 1
$color = "verde";
if ($color == "rojo") {
    echo 'El color es ROJO';
} else {
    echo 'El color no es ROJO';
}

echo '<hr>';

$ano = 2028;
if ($ano == 2022) {
    echo 'estamos en 2022';
} else {
    echo 'no estamos en 2022';
}

echo '<hr>';

// EJEMPLO 2
$continente = 'Asia';
$ciudad = 'Corrientes';
$nombre = 'Gerardo';
$edad = 75;
$mayoriaDeEdad = 18;

if ($edad >= $mayoriaDeEdad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == 'America') {
        echo "<h2> Y vive en $ciudad</h2>";
    } else {
        echo "<h2>Y no es de America</h2>";
    }
} else {
    echo "<h1>$nombre es menor de edad</h1>";
}

echo '<hr>';

// EJEMPLO 3
$dia = 1;
if ($dia == 1) {
    echo "es lunes";
} else {
    if ($dia == 2) {
        echo "es martes";
    } else {
        if ($dia == 3) {
            echo "es miercoles";
        } else {
            if ($dia == 4) {
                echo "es jueves";
            } else {
                if ($dia == 5) {
                    echo "es viernes";
                } else {
                    echo "es fin de semana";
                }
            }
        }
    }
}

echo '<hr>';

//CONDICIONALES ELSE/IF
//EJEMPLO 4
if ($dia == 1) {
    echo "LUNES";
} elseif ($dia == 2) {
    echo "MARTES";
} elseif ($dia == 3) {
    echo "MIERCOLES";
} elseif ($dia == 4) {
    echo "JUEVES";
} elseif ($dia == 5) {
    echo "VIERNES";
} else {
    echo "ES FIN DE SEMANA";
}

//EJEMPLO 5

echo '<hr>';

$edad1 = 18;
$edad2 = 64;
$edadOficial = 75;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO PUEDE TRABAJAR";
}

//OPERADORES LOGICOS
// && AND Y
// || OR O
// ! NOT NO

echo '<hr>';

$pais = 'Argentina';
if ($pais == 'Argentina' || $pais == 'España' || $pais == 'Colombia') {
    echo "En este pais se habla español";
} else {
    echo "En este pais no se habla español";
}

echo '<hr>';
// SWITCH

$dia = 7;

switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "ES FIN DE SEMANA";
        break;
}

echo '<hr>';

// GOTO
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";
echo "<h3>Instruccion 5</h3>";
marca:
echo "<h3>Me he saltado 5 echos</h3>";

