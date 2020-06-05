<?php
//autenticación basada en formularios es la mas popular usada en la mayoria de los sitios web.
//la autenticación basada en el protocolo http está configurada en el servidor y a menudo se usa como un nivel de seguridad adicional y éste se presenta antes de q se cargue cualquier página


$loginSuccessful = false;
if (isset($_SERVER['PHP_AUTH_USER'])&& isset($_SERVER['PHP_AUTH_PW'])){
    //si se cumple que en el servidor se registra el usr y la contraseña los capturo
    $user = $_SERVER['PHP_AUTH_USER'];
    $pw = $_SERVER['PHP_AUTH_PW'];
    if($user=='admin'&&$pw=='1234'){
        $loginSuccessful=true;
    }

}


if(!$loginSuccessful){
header('WWW-Authenticate:Basic');
header('HTTP/1.0 401 Unauthorized'); //el error 401 le dice al usuario q no está autorizado para ver la página
echo 'Error de inicio, usuario o contraseña incorrecta';
}else{
    echo 'Bienvenido '.$user;
}
