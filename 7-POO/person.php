<?php

abstract class Persona
{
    /*Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos un método abstracto debe ser definida como tal. Los métodos definidos como abstractos simplemente declaran la firma del método, pero no pueden definir la implementación. */

    //atributos
    public $name;
    private $last_name;
    public $age;
    public $nacionality;
    public $sex;
    static $color = 'rojo';

    //constructor
    function __construct()
    {
        $this->nacionality = 'Argentina';
    }

    //METODOS
    //metodo abstracto, este debe ser llamado por todas las clases hijas q lo hereden
    abstract function run();

    function see()
    {
        $this->sendOrder('see');
        /*  echo ' Veo un cohete que es de color ' . self::$color;*/
    }

    function talk()
    {

        $this->sendOrder('talk');
    }

    //metodo encapsulado
    private function sendOrder($order)
    {
        switch ($order) {
            case 'run':
                echo 'Correr';
                break;
            case 'see':
                echo 'Ver';
                break;
            case 'talk':
                echo ' Hablar';
                break;
            default:
                echo 'No se encontró la orden';
        }
    }


}

