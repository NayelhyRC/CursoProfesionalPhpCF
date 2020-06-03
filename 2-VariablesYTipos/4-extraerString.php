<?php
echo substr('Juan Federico Kaenel',5,15); //de la pos 5 al 15
echo '<br>';
echo substr('Hola voy a recortar para atrás',-11); //empieza de la derecha hacia atrás
echo '<br>';
$frase = 'Bienvenido al mundo de la programacion';
$findme =  'programacion';
$findme2 = 'a';
echo strpos($frase,$findme); //buscame la posicion de la palabra programacion
echo strpos($frase,$findme2,10); //le digo que me busque la a partir de la posicion 10