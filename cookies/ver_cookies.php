<?php
//PARA MOSTRAR EL VALOR DE LAS COOKIES

if($_COOKIE['miCookie']){
    echo "<h1>".$_COOKIE['miCookie']."</h1>";
}else {
    echo "no existe la cooki";
}

if($_COOKIE['expiracion']){
    echo "<h1>".$_COOKIE['expiracion']."</h1>";
}else {
    echo "no existe la cooki";
}



?>

<a href="crear_cookies.php">CREAR COOKIES</a>
<a href="borrar_cookies.php">BORRAR COOKIES</a>





