<?php
require_once('person.php');
class Client extends Persona{
    private $common;
    private $email;

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
}