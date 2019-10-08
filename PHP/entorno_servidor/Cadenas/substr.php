<?php
/*La función substr devuelve una subcadena de la cadena original, es decir, una parte de la cadena original. 
Esta función tiene 3 parámetros:

1. La variable que contiene la cadena.

2. Número que representa la posición (inclusive) en la que comenzará a ser extraída la subcadena.

3. Número que indica la cantidad de caracteres que serán extraídos. Este argumento es opcional. 
Si se omite se tomará hasta el final de la cadena original.*/


$cad = "cadena";

$sub1 = substr($cad, 2);

$sub2 = substr($cad, 2, 2);

echo "La subcadena número uno es la siguiente: $sub1 <br />";

echo "La subcadena número dos es la siguiente: $sub2";

?>