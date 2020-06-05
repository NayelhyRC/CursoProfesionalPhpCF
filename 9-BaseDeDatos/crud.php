<?php
require_once 'conexion.php';
abstract class Crud extends Connection{
    private $table;
    private $pdo;

    public function __construct($table)
    {
        $this->table=$table;
        $this->pdo=parent::conexion(); //como es una funcion protected accedemos con parent al metodo de la clase padre(conexion)
    }
    /*las bases de datos mysql soportan sentencias preparadas, estas se usan para ejecutar la misma sentencia repetidamente con gran eficiencia
    consisten en dos etapas: preparacion y ejecución
    Preparación: se envía una plantilla de sentencias al sv de bd el sv realiza una comprobación de sintaxis e inicializa los recursos internos del servidor
    para su uso posterior. Para que nos sirven? evitan inyecciones de codigo sql maliciosos en nuestra bd, ya que los valores de los parámetros q son transmitidos despues usan un protocolo diferente
    otra cosa es que estas reducen el tiempo de analisis ya q la preparacion de la consulta solo se realiza una vez


    Ejecución:

    */
    //preparación, esto lo vamos a hacer para leer todos los datos de una tabla
    public function get_All(){
        try{
            $stm = $this->pdo->prepare("SELECT * FROM $this->table");
            $stm = execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOException $ex){
         echo $ex->getMessage();
        }

    }

    public function getById($id){
        try{
            $stm = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
            $stm = execute(array($id));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }

    }

    public function delete($id){
        try{
            $stm = $this->pdo->prepare("DELETE * FROM $this->table WHERE id=?");
            $stm = execute(array($id));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    abstract function create();
    abstract function update();
}