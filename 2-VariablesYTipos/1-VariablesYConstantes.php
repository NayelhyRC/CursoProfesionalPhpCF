<?php

/*$rosa = 'color';

function imprimir(){
    //global $rosa; si quiero usar la rosa global
    $rosa = 'flor';
    echo $rosa;
}
imprimir(); //imprimo la rosa de ambito local
echo '<br>';
echo $rosa; //llamo a la rosa de ambito global
*/

/*Constantes*/

const PATH = 'cursoPHP/clases.php';
echo PATH .'<br>';

define('PATH2','cursoPhp2/clases.php');
echo PATH2;

//la diferencia es entre estos es que const define constantes en tiempo de compilacion, y define en tiempo de ejecucion
//otra es que const es una construccion del lenguaje y podemos usar para definir constantes en ambito global y clases a diferencia de define
//q solo se utiliza en ambito global.

/*$ruta = 'altarutaaa.com';
const PATH3 = $ruta;    //esto me da error debido a que con const no puedo declarar una constante como variable o nro
const PATH4 = mt_rand();*/

//con define si funciona
$ruta2 = 'altaruta.com';
define('PATH5',$ruta2);
define('PATH6',mt_rand());

//la funcion devuelve un arreglo, print y echo devuelven cadenas no arreglos
print_r(get_defined_constants(true));
