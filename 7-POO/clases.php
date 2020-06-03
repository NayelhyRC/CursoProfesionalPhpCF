<?php
/*class Persona{ //una clase es una plantilla, o modelo donde se redactan las caracteristicas comunes de un grupo de objetos
    //atributos
    public $edad;
    public $nombre;
    public $nacionalidad;
    public $sexo;

    //variables de clase
    static $color= 'rojo'; //el metodo static hace que este metodo pertenzca a la clase q la creó
    //por ejemplo clase padre tiene un metodo static entonces los hijos pueden ver ese metodo pero no modifcarlo SOLO SERÁ COMPARTIDO POR LOS OBJETOS DE LA INSTANCIA. PERTENECE A LA CLASE Q LA CREO


    //constructor de una clase va a definir los estados iniciales de las propiedades
    function __construct(){ //de esta forma construimos el constructor de la clase persona
        $this->nacionalidad='Argentina';
    }


    //metodos
    function correr(){

    }

    function ver(){
        echo ' Veo un cohete que es de color '.self::$color;
        $this->$nombre;
        $this->correr();
    }

    function hablar(){
        $this->nombre;
        $this->sexo;

    }
}*/
/*

class Coche{
    //atributos
    protected $ruedas;
    protected $chasis;
    public $motor;
    protected $color;
    //Constructor -> es el que da las propiedades iniciales a los atributos
    function __construct(){
        $this->ruedas = 4;
        $this->chasis = 'Deportivo';
        $this->motor = 'V8';
    }


    //metodos
    function arrancar(){
        echo 'Estoy arrancando ';
    }

    function frenar(){
        echo 'Estoy frenando';
    }

    function girar(){
        echo 'Estoy girando';
    }
    //SETTERS Y GETTERS . Sirven para poder modificar una propiedad privada
    function get_ruedas(){
        return $this->ruedas;
    }

    function set_color($color_coche,$nombre_coche){
        $this->color=$color_coche;
        $this->nombre=$nombre_coche;

        echo 'El nombre del coche es: '.$nombre_coche .' - El color de este coche es: '.$this->color;
    }
}
------------------------------------------------------------------------------------*/
/*
class Camion extends Coche{
function __construct(){
$this->ruedas='8';
$this->chasis='Gigante';
$this->motor='V12';
}
    //sobre escritura de metodos ya q no es el mismo argumento para el camion
    function establece_color($color_camion,$nombre_camion){
        $this->color=$color_camion;
        $this->nombre=$nombre_camion;

        echo 'El nombre del camion es: '.$nombre_camion .' - El color de este camion es: '.$this->color .'<br>';
    }

    function arrancar()
    {
        parent::arrancar(); // Con parent decimos que vamos a hacer uso del metodo declarado en la clase padre
        //acá se va a imprimir tod lo q hace la funcion arrancar de la clase padre
        echo '- Camion arrancado';// esto es propio de la clase camion la hija
    }
}

/*-------------------------------------------------------------------------------------*/
//ejercicio con metodos estáticos
class Compra_Vehiculo{
    //PROPIEDADES
    private $precio_base;

    private static $ayuda=0; //este campo pertenece a la clase y ninguna instancia va a tener una copia de el sino que esta es unica de la clase
    //lo que si el campo static es compartido por las clases herederas, esto no significa que tengan una copia, pero si que sea la misma para las demas clases o instancias q la comparten
    //al hacer static a la ayuda estamos diciendo que esta ayuda es unica para todas las clases o objetos, es decir va a ser la misma. Supongamos que esta ayuda proviene del gobierno y esta es unica para tod el q compra vehiculos en esta empresa

    //CONSTRUCTOR

    function __construct($gama){
        if($gama=='urbano'){
            $this->precio_base=100000;
        }
        else if($gama=='deportivo'){
            $this->precio_base=200000;
        }
        else if($gama=='paraguayo'){
            $this->precio_base=50000;
        }
    }

    //--------------METODOS--------------
    //extras
    function climatizador(){
        return $this->precio_base+=500;
    }
    function tapiceria_cuero($color){
        if($color=='blanco'){
            return $this->precio_base+=2000;
        }
        else if($color=='marron'){
            return $this->precio_base+=1000;
        }

    }

    function estereo(){
        return $this->precio_base+=300;
    }

    /*Método estatico*/
    static function descuento_gobierno(){
        if(date("d-m-y")>"15-06-20"){
            self::$ayuda=2000;
        }//else no va pq ya declare arriba q es = 0


    }

    function precio_final(){
        $valor_final = $this->precio_base - self::$ayuda; //con self yo llamo a un metodo o propiedad estática, y para manipularlo por fuera de la clase hacemos nombre_clase::$ayuda;
        return $valor_final;
    }

}

