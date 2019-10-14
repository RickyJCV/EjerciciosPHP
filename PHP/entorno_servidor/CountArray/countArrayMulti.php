<?php //Ejemplo arrays aprenderaprogramar.com

$miEspArray[6]=99;

$miEspArray[22]=87;

echo 'Numero de elementos de miEspArray es '.count($miEspArray).'<br/>';

echo "--------------------";

$array2[0][0][0] = "Prueba1";

$array2[0][0][1] = "Prueba2";

$array2[0][0][2] = "Prueba3";

$array2[0][1][0] = "Prueba4";

$array2[0][1][1] = "Prueba5";

$array2[1][0][1] = "Prueba6";

$array2[1][1][2] = "Prueba7";

$array2[1][2][1] = "Prueba8";

$array2[2][0][0] = "Prueba9";

$array2[2][0][1] = "Prueba10";

$array2[5][0][1] = "Prueba11";

echo '<br/>Numero de indices en el primer nivel: '.count($array2);

echo '<br/>Numero de indices en el segundo nivel de array[0]: '.count($array2[0]);

echo '<br/>Numero de indices en el segundo nivel de array[1]: '.count($array2[1]);

echo '<br/>Numero de indices en el segundo nivel de array[2]: '.count($array2[2]);

echo '<br/>Numero de indices en el segundo nivel de array[3]: '.count($array2[3]);

echo '<br/>Numero de indices en el segundo nivel de array[5]: '.count($array2[5]);

echo '<br/>Numero de indices en el tercer nivel de array[0][0]: '.count($array2[0][0]);

echo '<br/>Numero de indices en el tercer nivel de array[0][1]: '.count($array2[0][1]);

echo '<br/>Numero de indices en el tercer nivel de array[1][0]: '.count($array2[1][0]);

echo '<br/>Numero de indices en el tercer nivel de array[1][1]: '.count($array2[1][1]);

echo '<br/>Numero de indices en el tercer nivel de array[1][2]: '.count($array2[1][2]);

echo '<br/>Numero de indices en el tercer nivel de array[2][0]: '.count($array2[2][0]);

echo '<br/>Numero de indices en el tercer nivel de array[5][0]: '.count($array2[5][0]);

?>