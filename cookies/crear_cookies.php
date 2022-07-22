<?php
//CREAR COOKIE

// setcookie("nombre","valor que solo puede ser texto", caducidad, ruta, dominio);

// COOKIE BASICA
setcookie("miCookie", "valor de mi cookie");

// COOKIE BASICA
setcookie("miCookie", "Aguante Boca");

// COOKIE CON EXPIRACION
setcookie("expiracion", "valor de mi cookie de 365 días", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>

