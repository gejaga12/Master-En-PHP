<?php

$error = 'faltan_valores';
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) 
&& !empty($_POST['edad']) && !empty($_POST['email']) 
&& !empty($_POST['pass'])){

 $error='ok';

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $edad = $_POST['edad'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];

//VALIDAR EL NOMBRE 


}else {
    $error = 'faltan_valores';
    header("Location:index.php?error=$error");  //REDIRECCION A PAG ERROR
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    
<?php if ($error == 'ok'): ?>
    <h1>DATOS VALIDADOS CORRECTAMENTE</h1>
    <p><?=$nombre?></p>
    <p><?=$apellido?></p>
    <p><?=$edad?></p>
    <p><?=$email?></p>
<?php endif; ?>



</body>
</html>