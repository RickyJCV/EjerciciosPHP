<?php
 // Apartado a)
echo ' <div>';
echo '<strong>a) Una función que reciba cinco números enteros como parámetros y 
	  muestre por pantalla el resultado de sumar los cinco números (tipo
	  procedimiento, no hay valor devuelto).</strong><br/>'	;

$a1=14;
$a2=12;
$a3=7;
$a4=4;
$a5=200;
echo "El Resultado sumar $a1, $a2, $a3, $a4, $a5  es ===>";
sumar($a1,$a2,$a3,$a4,$a5) ;
function sumar($n1,$n2,$n3,$n4,$n5)
	{
	echo $suma=$n1+$n2+$n3+$n4+$n5;
	}
echo '<br/><br/>';
?>