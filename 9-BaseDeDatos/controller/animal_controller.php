<?php
require_once '../model/animal.php';
class AnimalController{
    private $model;
    public function __construct()
    {
        $this->model= new Animal();
    }
    public function indexAnimal(){
        require_once '../view/animal.php';
    }
    public function showById(){
        $animal = new Animal();
        //cuando recibamos el id vamos a poder consultar el animal
        if (isset($_REQUEST['id'])){
            $this->model->getById(($_REQUEST['id']));
            require_once '../view/animal_form.php';
        }
    }

    public function save(){
        $animal = new Animal();
        $animal->id=$_REQUEST['id'];
        $animal->name=$_REQUEST['name'];
        $animal->specie=$_REQUEST['specie'];
        $animal->breed=$_REQUEST['breed'];
        $animal->gender=$_REQUEST['gender'];
        $animal->color=$_REQUEST['color'];
        $animal->age=$_REQUEST['age'];
        $animal->id>0?$animal->update():$animal->create(); //si el id es mayor q cero nos están enviando un dato que quieren modificar pero si es cero hay q crear un nuevo registro
        header('location:index.php');
    }
    //metodo para borrar un dato
    public function quit(){
        $this->model->delete($_REQUEST['id']);
        header('location:index.php');
    }
}
