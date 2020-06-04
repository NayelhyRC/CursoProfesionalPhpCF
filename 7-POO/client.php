<?php
require_once('person.php');
require_once ('client.php');
require_once('operation.php');
class Client extends Persona{
    private $common;
    private $email;

    //hago uso del trait para poder usar sus funciones
    use Operation;

    //enviamos forzozamente un dato tipo string por get
    public function getCommon():String
    {
        return $this->common;
    }

    public function setCommon(String $common)
    {
        $this->common = $common;
    }


    public function getEmail():String
    {
        return $this->email;
    }


    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    function eat(){
    echo parent::talk();

    }

    //declaro el metodo abstracto de la clase padre que es Persona
    function run()
    {
        echo 'Cliente corriendo';
    }

    function pay(){
        echo 'El dinero que gasté fue : '.$this->plus('33',44).' pesos';
    }

    function say(Employee $employee){ //en este metodo recibimos forzozamente un empleado
        echo "{$this->getName()} felicitame al empleado/a {$employee->getName()}";
    }

}