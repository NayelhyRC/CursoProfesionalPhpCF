<?php
trait Operation {
    function plus($num1,$num2){
        return $num1+$num2;
    }
    function minus($num1,$num2){
        return $num1-$num2;
    }
}

/*Un trait funciona para herencia multiple casi igual que una interfaz
El problema es que las interfaces funcionan como un contrato debes implementar tod necesariamente. Con un trait es a voluntad lo usas donde quieras.
*/