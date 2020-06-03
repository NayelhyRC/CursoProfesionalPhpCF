<?php
declare(strict_types=1);
//FUNCIONES CON ARGUMENTOS
function dividedBy($divisor,$dividendo=1){ //default=1
    $result = $divisor / $dividendo;
    echo 'El resultado de la función es: '.$result;
}
//dividedBy(10);

function plus(&$param1,$param2){ //con & le digo q le paso el valor por referencia, es decir fuera de la funcion se verá afectado el valor por el q tenga detro de la funcion
    //$suma = $param1 + $param2;
    //echo 'EL resutltado de la suma es: '. $suma;
    $param1+=$param2;
}

$arg1= 32;
$arg2=23;
//plus($arg1,$arg2);
//echo ' El valor del argumento1 es : '.$arg1;




//--------------------FUNCIONES RECURSIVAS
//esta funcion se comporta de la misma forma que un while
function call($value){
    if ($value<10){
        echo $value.'<br>';
        call(++$value);
    }
}
call(1);

//Funcion con return -> return causa q la funcion finalice su ejecucion y pase el control inmediatamente a la linea que fue llamado la funcion

function operation($val1,$val2){
    return [$val1+$val2, $val1*$val2, $val1-$val2];
}
//la funcion list vamos a tener cada uno de los valores q se encuentran en el arreglo. el arreglo lo tenemos en la funcion operation
list($suma, $multiplicacion, $resta)=operation(15,5);
echo "La suma es : $suma <br>, La resta es: $resta <br>, la multiplicacion es: $multiplicacion";

//------------------------------------Funciones anónimas
//la podemos manejar desde una variable
echo '<br>';
$operacion=function($n1,$n2){
    $suma = $n1 + $n2;
    return $suma;
};

echo 'El resultado es: '.$operacion(15,5);

//Fnciones variables

function funcion(){
    echo 'funcion variable';
}
$variable = 'funcion';
$variable();

//Declaraciones de tipo escalar
//declare(strict_types=1); ->esto va al principio del php y sirve para obligar a que el tipo de datos q se pide en el argumento sea obligatorio
function validate(int $age){ //si queremos que una funcion nos devuelva en return un tipo de dato especifico sería
    //function validate(int $age):int{ ->con :int le digo q el return tiene q ser entero
        if($age>=18){
        echo ' Sos mayor de edad';
    }
    else{
        echo ' sos Menor de edad';
    }
}

//validate('12.2'); //error de tyype
validate(12);