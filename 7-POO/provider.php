<?php
require_once('person.php');
class Provider extends Persona{
    private $account;
    private $bank;

    function sendProducts(){

    }

    //declaro el metodo abstracto de la clase padre que es Persona
    function run()
    {
        echo 'Proveedor corriendo';
    }


}