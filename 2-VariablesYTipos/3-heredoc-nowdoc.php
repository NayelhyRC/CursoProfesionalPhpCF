<?php
$animal1 = 'gato montes';
$animal = <<<frase
"hola soy un texto escrito \n con heredoc" $animal1
'hola'
<br>
frase;

echo $animal;

//now doc funciona como si escribieramos texto con comillas simples
$animalito = <<<'frase1'
"hola soy un texto \n $animal escrito con nowdoc"
'hola soy juan'
frase1;

echo $animalito;