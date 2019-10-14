<?php //Le podemos asociar a cada elemento del array un indice y si luego lo llamamos se muestra su contenido

$indice = 'coche';

$colores_vehiculos = array($indice => 'Rojo','moto' => 'verde','avion' => 'amarillo');

echo $colores_vehiculos[$indice];

?>