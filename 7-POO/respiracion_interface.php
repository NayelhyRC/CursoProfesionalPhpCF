<?php

interface Respiracion
{
    /*Una interfaz es muy similar a una clase abstracta con la diferencia que al crear una clase abstracta "obligamos"
    a que todos nuestras clases hijas implementen los componentes (atributos y métodos) de la clase padre, en cambio mediante
    un interface nosotros mismos elegimos a que clase vamos a implementar nuestros componentes.


    Una interfaz no puede contener atributos ni métodos implementados, mientras que una clase abstracta sí que puede contenerlos
    Una clase sólo puede heredas una clase abstracta, mientras que en una misma clase se pueden implementar varias interfaces.
    Las clases abstractas pueden declarar los métodos con diferente visibilidad (public, protected, internal, etc; private no, esto indicaría que una clase derivada no podría ver el método, por tanto no tendría sentido; final tampoco, porque no admitiría implementaciones futuras, aunque una clase derivada sí podría contener un método como final), mientras que en los interfaces todos los métodos deben ser públicos (también static)
    Los métodos que no implementamos en una clase abstracta, deben ser abstract, en un interface, todos los métodos son abstract, y ninguno debe ser implementado.

    En resumen una clase abstracta puede:
    Iniciar jerarquias
    puede tener estados y  comportamientos(metodos y atributos)
    No es posible instanciar un objeto a partir de una clase abstracta.

    Una interface puede:
    iniciar jerarquias
    una clase puede implementar muchas interfaces pero solo puede heredar una sola clase abstracta

    Entonces las interfaces nos ayudan a simular la herencia multiple


    */

    //metodos de la interfaz estos deben ser PUBLICOS!!
    public function cavidadNasal();
    public function traquea();
    public function nariz();
    public function bronquio();
    public function pulmon();
}