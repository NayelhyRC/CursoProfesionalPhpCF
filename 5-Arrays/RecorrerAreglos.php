<?php
//arreglo indexado
$colors=['Rojo','Azul','Negro'];
//arreglo asociativo
$persona=['Nombre'=>'Esteban','Apellido'=>'Bonucci','Edad'=>12];
//multidimensional
$battleShip=[
    'A'=>['Oceano','Barco','Oceano'],
    'B'=>['Oceano','Oceano','Barco'],
    'C'=>['Oceano','Oceano','Barco'],
    'D'=>['Barco','Oceano','Oceano'],
];
//para recorrer arreglos indexados usamos for

for ($i=0;$i<sizeof($colors);$i++){
    echo "Indice: $i - Valor: {$colors[$i]} <br>";
}

//para recorrer arreglos asociativos usamos foreach
foreach ($persona as $clave=>$valor) {
 echo "$clave - $valor  <br>";
}

//para recorrer los arreglos multidimensionales usamos foreach y for
echo '<br>';

echo 'Coordenadas <br>';
foreach ($battleShip as $clave=>$valor){ //si mi clave es a obtiene los valores del arreglo indexado
    //recorre el arreglo indexado
    for ($j=0;$j<sizeof($valor);$j++){
        /* echo "Fila: $clave - Columna:$j <br>";*/
        if($battleShip[$clave][$j]=='Barco')
        {
            echo "Fila: $clave - Columna:$j  DESTRUIR<br>";
        }
        else{
            echo "Fila: $clave - Columna:$j <br>";
        }
    }
}

//La clave son las filas y los indices los (valores) de la columna


