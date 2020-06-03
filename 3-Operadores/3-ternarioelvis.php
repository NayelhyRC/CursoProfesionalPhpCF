<?php
/*Ternario*/
$age=18;

echo ($age>=18)?'Eres mayor de edad' : 'Eres menor de edad';
echo '<br>';

/*------------------------.Elvis.----------------*/
//este es igual q el ternario pero es binario
$anios='';

echo $anios?:'No hay edad desde elvis'; //si no hay edad imprime no hay edad
echo '<br>';
/*-------------------------.Funcion null--------------.*/

$age1;

echo $age1??'No hay edad desde null';
echo '<br>';
//esto si no lo hacemos con la funcion null tenemos q usar iiset
echo isset($age1)?:'No hay edad desde isset';
//con elvis nos marcará error debido a q la variable está sin definir
