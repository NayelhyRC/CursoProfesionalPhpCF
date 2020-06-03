<?php
require_once('clases.php');

$compra_antonio = new Compra_Vehiculo("deportivo");
$compra_antonio->climatizador();
$compra_antonio->estereo();
$compra_antonio->tapiceria_cuero('blanco');

//llamo al metodo estatico
Compra_Vehiculo::descuento_gobierno();

echo 'Total a pagar: '.$compra_antonio->precio_final(). ' pesos';