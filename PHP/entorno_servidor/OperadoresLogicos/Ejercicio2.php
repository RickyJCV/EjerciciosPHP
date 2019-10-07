<?php
$a=4;
$b=2;
$inicial=$a;

echo "<h1>Operadores de asignación compuestos</h1>";
echo "Valores iniciales: a = $a, b = $b <br>";

echo "Asignación compuesta de suma: a += b equivale a = a + b <br>";
$a+=$b;
echo "Ahora el valor de a es: $a";
$a=$inicial;

echo "Asignación compuesta de resta: a -= b equivale a = a - b <br>";
$a-=$b;
echo "Ahora el valor de a es: $a";
$a=$inicial;


?>