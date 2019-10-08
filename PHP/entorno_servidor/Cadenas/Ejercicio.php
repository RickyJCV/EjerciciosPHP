<?php
$cad ="Didactica y divulgacion de la programacion";
$palabra1 = substr($cad, 0, 9);
$palabra2 = substr($cad, 10, 1);
$palabra3 = substr($cad, 12, 11);
$palabra4 = substr($cad, 24, 2);
$palabra5 = substr($cad, 27, 2);
$palabra6 = substr($cad, 30, 12);

$long1 = strlen($palabra1);
$long3 = strlen($palabra3);
$long6 = strlen($palabra6);

echo "Las palabras primera, tercera y sexta son:" . " " . ($palabra1 .", ". $palabra3 .", ". $palabra6);
echo "<br>";
echo "La palabra primera es $palabra1 y tiene $long1 caracteres, 
la palabra tercera es $palabra3 y tiene $long3 caracteres. La 
palabra sexta es $palabra6 y tiene $long6 caracteres";

?>