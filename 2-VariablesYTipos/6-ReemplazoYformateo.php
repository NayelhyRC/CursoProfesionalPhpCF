<?php
$search = ' ';
$replace = ':';
$text = '91 75 A3 EC 0A 9E';

echo str_replace($search,$replace,$text,$count); //donde hay un espacio agregame :
echo '<br>';
echo $count;

$arg1 = 1994;
$arg2 = 'PHP';
$text = 'En %d fue creado %s'; //%d hace referencia a caracter de int, y %s a un string
// en caso de especificar la posicion
// $text= 'En %2$s fue creado %1$d' con esto le digo que permito que el %s q hace referencia al año se reciba en el segundo orden a traves de 2$

echo '<br>';
echo sprintf($text,$arg1,$arg2);
