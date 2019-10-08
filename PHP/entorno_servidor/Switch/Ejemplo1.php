<?php

$variable=2;

switch($variable) {

case 1:

//Se ejecuta si $variable vale 1

echo '$Variable es igual a 1.';

break;

case 2:

case 3:

//Se ejecuta si $variable vale 2 o 3

echo '$Variable es igual a 2 o 3.';

break;

default:

//Se ejecuta en cualquier otro caso

echo '$Variable no es igual a 1, 2 o 3.';

}

?>