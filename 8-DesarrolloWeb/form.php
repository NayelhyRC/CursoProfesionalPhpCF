<?php
//observamos que los metodos post,get y request son arreglos asociativos
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['name'];
    $last_name = $_REQUEST['last_name'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $sex = $_REQUEST['sex'];
    echo "Hola, bienvenido $name $last_name, por lo que me informan tu sexo es $sex, tu dirección es $address y tu número de celular es: $phone";
    //respuesta del servidor
    header("location: respuesta.php?answer=Datos recibidos!!&name={$name}&last_name={$last_name}");
}
