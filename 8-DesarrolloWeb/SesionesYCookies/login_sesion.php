<?php
$user = 'juan';
$pass = '1234';

session_start();
if($_POST['userName']==$user && $_POST['password']=$pass){
$_SESSION['login']='Administrador'; //guardo la sesión login como administrador
header('location: Sesiones.php');
}else{
    echo 'Usuario o contraseña incorrecta';
}
