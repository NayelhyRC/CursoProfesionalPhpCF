<?php
//array multidimensional
$battleShip=[
    'A'=>['Oceano','Barco','Oceano'],
    'B'=>['Oceano','Oceano','Barco'],
    'C'=>['Oceano','Oceano','Barco'],
    'D'=>['Barco','Oceano','Oceano'],
];

$coordenadasA = $battleShip['A'][0];
$coordenadasB = $battleShip['B'][2];
echo $coordenadasA;
echo $coordenadasB;