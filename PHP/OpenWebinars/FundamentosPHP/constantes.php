<?php
#Constante simple
define("MI_CONSTANTE","HOLA");

#Constante array
define("MI_ARRAY", array("2","3"));

$_miconstante = MI_CONSTANTE;

echo MI_CONSTANTE . "\n";

echo $_miconstante . "\n";

print_r (MI_ARRAY[0]);
?>