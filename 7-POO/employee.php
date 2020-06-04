<?php
require_once('person.php');
require_once('respiracion_interface.php');
class Employee extends Persona implements Respiracion {
    private $position;
    private $schelude;

    function cook(){

    }

    //declaro el metodo abstracto de la clase padre que es Persona
    function run()
    {
        echo 'Empleado corriendo';
    }

    public function cavidadNasal()
    {

    }

    public function traquea()
    {

    }

    public function nariz()
    {

    }

    public function bronquio()
    {

    }

    public function pulmon()
    {

    }
}