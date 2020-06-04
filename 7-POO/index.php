<?php
declare(strict_types=1);
require_once('person.php');
require_once('client.php');
require_once('employee.php');
require_once ('provider.php');



//$luren = new Client();
//$luren->eat();
//cuando hacemos uso de atributos privados usamos get y set

//$luren->setEmail('luren@yahoo.com');
//echo $luren->getEmail();

/*$juan new Persona(); no me dejaria hacer una instancia a la clase persona porque esta es abstracta*/
//$luren->run();

//$eze = new Employee();
//$eze->run();

//$maria = new Provider();
//$maria->run(); //tanto maria como eze y luren usan el mismo metodo pero este usa polimorfismo ya q cada clase implementa el metodo de distintas formas
//a eso llamamos polimorfismo(mismo metodo distintas formas de actuar)


//$luren->pay();

//Type Hiting -> es parecido al declare strict pero a diferencia de este, este se usa para enviar un objeto por parametro o saber de donde vienen los parametros, el otro es para declarar el tipo de dato(float, string, int)
$luren = new Client();
$luren->setName('Luren Ipsum');
$gael = new Employee();
$gael->setName('Gaelita');
$luren->say($gael); //mando por parametro a gael que es una empleada(un ejemplar de clase)

/*Clase anónima, estas son utiles cuando queremos crear un objeto sencillo*/
$ananymous = new class(10,20) extends Persona {
    //atributos
    private $dividend;
    private $divisor;



    //constructor
    public function __construct($dividend,$divisor)
    {
   /*     $this->dividend=$dividend;
        $this->divisor=$divisor;*/
    $this->see();
    }
    //metodos
    public function dividedBy(){
        $plus=$this->dividend+$this->divisor;
        echo ' Soy la clase anónima y este es el resultado:  '.$plus;
    }

    function run()
    {

    }
};

//llamo al metodo a través de la clase, no es necesario crear instancias
$ananymous->dividedBy();
