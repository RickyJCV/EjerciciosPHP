<?php
// Apartado b)
echo '<strong>b) Una función que reciba cinco números enteros como parámetros 
y devuelva el resultado de sumar los cinco números (tipo función, hay un valor 
devuelto). Asigna el resultado de una invocación a la función con los números 
2, 5, 1, 8, 10 a una variable de nombre $tmp y muestra por pantalla el valor 
de la variable.</strong><br/>';

 $b1=5;
 $b2=6;
 $b3=7;
 $b4=10;
 $b5=14;
 $tmp=sumar2($b1,$b2,$b3,$b4,$b5);
 
function sumar2($n1,$n2,$n3,$n4,$n5)
	{
	$resul =$n1+$n2+$n3+$n4+$n5;
	 return $resul;
	}
echo "el resultado de sumar $b1,$b2,$b3,$b4,$b5 es: ==>".$tmp;
?>