<?php
/*require_once 'model/animal.php';
$animal = new Animal();
print_r($animal->get_All()); //para obtener todos los registros de nuestra tabla animal


$animal->id=2; //si usamos el update hay q pasarle el id
$animal->name='Ozzy';
$animal->specie='Labrador';
$animal->breed='akita';
$animal->gender='Macho';
$animal->age=2;
$animal->color='red';
//$animal->create();
//$animal->delete(1);
//$animal->update();*/
require_once 'view/animal.php';

if(!isset($_REQUEST['controller']))
{
    require_once 'controller/animal_controller.php';
    $controller= new AnimalController();
    $controller->indexAnimal();//si no recibimos ningun controlador que cargar me va a cargar esta por defecto
}//pero si recibimos un controlador que cargar
else{
    $controller= $_REQUEST['controller'];
    $action = $_REQUEST['action'];
    require_once 'controller/'.$controller.'_controller.php';
    $controller = ucwords($controller); //nos convierte la primera letra en minuscula ucwords
    $controller = new $controller;
    call_user_func(array($controller,$action)); //recibe un arreglo donde le pasamos la instancia y el metodo q queremos q se ejecute


}

