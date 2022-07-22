<?php
// INICIAR LA SESION
session_start();

// VARIABLE LOCAL
$variable_normal = "Soy una variable normal";
//VARIABLE DE SESION
$_SESSION['variable_persistente'] = "Soy una sesion activa";

echo $variable_normal;
echo $_SESSION['variable_persistente'];

?>