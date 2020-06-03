<?php
//en este caso analizaremos tres tipos de de errores

//Parse error, este ocurre cuando hay problema de sintaxis en una linea
//echo 'Hola' //Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ';' or ',' in /opt/lampp/htdocs/CursoProfesionalPHP-CF/1-Errores/Tiposdeerrores.php on line 6
//echo 'hola2';

//Fatal Error, llama a una funcion q no existe
//imprimir(); //Fatal error: Uncaught Error: Call to undefined function imprimir() in /opt/lampp/htdocs/CursoProfesionalPHP-CF/1-Errores/Tiposdeerrores.php:9 Stack trace: #0 {main} thrown in /opt/lampp/htdocs/CursoProfesionalPHP-CF/1-Errores/Tiposdeerrores.php on line 9
//la lectura del codigo se detiene donde se causa el error
//echo 'hola';

//Warning, cuando hacemos una diviision por 0

/*$resultado =  1/0; //Warning: Division by zero in /opt/lampp/htdocs/CursoProfesionalPHP-CF/1-Errores/Tiposdeerrores.php on line 15 INF
echo $resultado;
echo '<br>'.'llegue al final'; //esta linea si se ejecuta solo avisa que hay un error*/

//Notice, avisa que una variable no está definida
$result;
echo 'Resultado: '.$result;
echo 'llegue al final'; //en este caso tmb llegamos al final

//Podemos imprimir errores utilizando la funcion trigger

trigger_error('Error al escribir', E_USER_NOTICE); //msg, type
trigger_error('Error..',E_USER_WARNING);

