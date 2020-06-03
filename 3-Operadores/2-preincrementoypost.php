<?php

$z=5;
echo 'Pre incremento: '.++$z;
//incrementa antes de imprimir
echo ' Resultado: '.$z;
echo '<br>';
echo 'Post incremento: '.$z++;
//incrementa dspues de que imprime el valor
echo ' Resultado: '.$z; //acá ya está incrementado

//lo mismo funciona con decremento