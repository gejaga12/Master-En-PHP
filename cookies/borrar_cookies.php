<?php
if($_COOKIE['miCookie']){
unset($_COOKIE['miCookie']);
setcookie("miCookie",'',time()-100);
}
header('Location:ver_cookies.php');
?>