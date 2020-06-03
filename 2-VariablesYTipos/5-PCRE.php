<?php
//PCRE es una biblioteca que implementa expresiones regulares
$text = 'hola mundo 123';
$regex='/hola/'; //tenemos que abrir y cerrar el delimitador con /
echo preg_match($regex,$text); //la funcion va a buscar el patrón dentro del texto, devuelve 1 si la encuentra y 0 si no la encentra
echo '<br>';
//si queremos buscar al inicio la palabra hola
//$regex2='/^hola/'; //devuelve 1 pq hola esta al inicio

$text2='mundo hola';
//$regex2 = '/hola$/'; //con el signo peso le digo q me busque al final
$regex2='/^hola/'; //devuelve 0 pq hola NO esta al inicio
echo preg_match($regex2,$text2);

echo '<br>';
$textoinsensible='Hola world';


/*METACARACTERES*/

$regex3 = '/^hola/i'; //devuelve 1 gracias al metacaracter i que la sensibilidad, es decir si es mayusculas y no está en el texto q lo mismo me de 1
echo preg_match($regex3,$textoinsensible);



$text4 = 'Yo vivo en argentina';
$regex4 = '/(Arg|arg)entina/';
echo preg_match($regex4,$text4);
echo '<br>';


$texto5 = 'Mis numeros favoritos son: 1 2 3 4 5 9';
$regex5 = '/[0-9]/'; //puedo aplicar lo mismo con la secuencia escapada $regex5= '/\d/'->esto me va adetectar todos los nros, si queremos que me detecte tod menos los nros tengo que poner $regex = '/\D/';
echo preg_match_all($regex5,$texto5,$matches);//devuelve 6 q son los nros de coincidencia //guardame todas las conincidencias en matches, donde este va a ser un array
echo '<br>';
print_r($matches);  //imprimime el array matches donde están las coincidencias
echo '<br>';


//OTRA SECUENCIA ESCAPADA MUY BUENA ES \w que imprime todos los caracteres alfanumericos-> esto es lo mismo que $regex = '/[A-Za-z0-9_/'; esto no incluye al caracter * si está en la frase
$texto6= 'Hola world desde la luna *';
$regex6= '/\w/'; //si no queremos que nos muestre los caracteres alfanumericos ponemos W mayuscula
echo preg_match_all($regex6,$texto6,$matches);
echo '<br>';
print_r($matches);
echo '<br>';


$texto6= 'Hola world el 12/03/1996 desde la luna *';
$regex6= '/12\/03\/1996/'; //utilizamos la barra invertida para escaparnos , sino nos tiraría error ya q estaríamos cerrando y abriendo los delimitadores y nos arrojaria error
echo preg_match_all($regex6,$texto6,$matches);
echo '<br>';
print_r($matches);


/*METACARACTERES CUANTIFICADOS*/
// Encuentra 0 o más concurrencias -> *
// Encuentra 1 o más concurrencias -> +

$text7 = 'hoooooola';
$regex7 = '/ho*la/'; //entre ho y la puede haber cualquier cosa. Si pongo ha*la lo mismo funciona ya que encuentra 0 o más concurrencias.
echo preg_match($regex6,$texto6);

$texto8 = 'hoa'; //si fuera holaaaa si funcionaría
$regex8 = '/ho+la/';
echo preg_match($regex8,$texto8); //devuelve 0 pq tiene que haber 1 o más de 1 ocurrencia

$texto9 = 'leer';
$regex9 = '/le{2,}r/'; //con esto le digo que aceptamos 2 e, si ponemos {2,} le digo que aceptamos mas de dos e. si queremos tener un rango poenemos {2,4} con eso le digo q puede haber mas de 2 y hasta 4
echo preg_match($regex9,$texto9);


//--------------------------   para una fecha
$fecha = '13-12-1996';
                //0-31              / o -    0-12          / o -   0-9999
$regexfecha = '/([0-2][0-9]|3[0-1])([\/|-])(0[1-9]|1[0-2])([\/|-])([\d{4}])/';
echo preg_match($regexfecha,$fecha);