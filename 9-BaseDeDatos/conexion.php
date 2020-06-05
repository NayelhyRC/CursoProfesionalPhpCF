<?php
/*PDO es una API, como mysqli, si queremos cambiar de sistemas de gestor de bd conviene usar PDO Debido a q este es compatible con la mayoria de los gestores en cambio mysqli es solo para mysql  Es una capa de para el acceso a la BD para acceder y administrar bases de datos en aplicaciones php
Todos los gestores de bd tienen un pdo especifico. En php init podemos instalar los controladores pdo en caso de que necesitemos y tambien podemos descomentarlos
de manera que podamos usar -> para eso nos dirigimos a local host -> Php Info -> buscar donde está php init -> buscar y descomentar el pdo que necesitamos extension=php_pdo_mysql.dll
*/
//la clase pdo se encarga de  mantener la conexion de la bd ademas de crear instancia de la clase pdo statement, este devuelve las sentencias sql y devuelve los resultados
//las clases pdo exception para manejar los errores que pueden ocurrir a la hora de realizar la conexión

//print_r((PDO::getAvailableDrivers())); //obtenemos todos los pdo que tenemos disponibles

class Connection
{
    private $driver = 'mysql';
    private $host = 'localhost'; //acá deberiamos colocar la ip de nuestro servidor en caso que tengamos subido a un servidor
    private $user = 'root';
    private $pass = '';
    private $dbName = 'cursocfphp';
    private $charset = 'utf-8';

    protected function conexion()
    {
        try { //dns , usr y  contraseña
            $pdo = new PDO("$this->driver:host={$this->host};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Este nos reportará errores y el otro excepciones para saber q ocurrió mal
        }catch (PDOException $ex)
        {
        echo $ex->getMessage();
        }
    }
}
