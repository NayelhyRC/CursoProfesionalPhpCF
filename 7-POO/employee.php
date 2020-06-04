<?php
require_once('person.php');
class Employee extends Persona{
    private $position;
    private $schelude;

    function cook(){

    }

    //declaro el metodo abstracto de la clase padre que es Persona
    function run()
    {
        echo 'Empleado corriendo';
    }
}