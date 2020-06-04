<?php
declare(strict_types=1);
require_once('person.php');
require_once('client.php');
require_once('employee.php');
$luren = new Client();
//$luren->eat();



//cuando hacemos uso de atributos privados usamos get y set

$luren->setEmail('luren@yahoo.com');
echo $luren->getEmail();

/*$juan new Persona(); no me dejaria hacer una instancia a la clase persona porque esta es abstracta*/
$luren->run();

$eze = new Employee();
$eze->run();