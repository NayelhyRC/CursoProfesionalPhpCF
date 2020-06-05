<?php
//session start tengo que usar cada vez q hago uso de sesiones , sino tengo que modificar el php.ini y poner session start = 1
session_start();

//existen dos metodos para eliminar la sesión
//1era -> session_destroy(); -> esta no elimina todas las sesiones
//2da -> unset($SESSION['login']; -> nos elimina una sesión en específico.

//para modificar en la cookie el nombre de las sesiones
//session_start(['name'=>'Juan'])

if(isset($_SESSION['login'])){
//si la sesión no está vacía
    echo 'Bienvenido '.$_SESSION['login'];

    //también podemos modificar el nombre de las sesiones
    //$_SESSION['login']='Cliente';

}
else{
    echo 'Sin sesión';
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
</head>
<body>
<form action="login_sesion.php" method="post">
    Usuario : <input type="text" name="userName"><br>
    Contraseña : <input type="password" name="password"><br>
    <input type="submit" name="send" text="Enviar">
</form>
</body>
</html>