<meta charset="utf-8">

<?php //Ejemplos curso PHP aprenderaprogramar.com

/*
Esta función realiza la comparación segura de Strings y devuelve un valor numérico.
Su sintaxis habitual es la siguiente:

if (strcmp ($cadena1 , $cadena2 ) == 0) { … }
*/

$cadena1 = '1e3'; $cadena2 = '1000';

if ($cadena1 == $cadena2) {echo 'Según == las dos cadenas son iguales';}

else {echo 'Según == las dos cadenas NO son iguales'; }

echo '<br/>';

if ($cadena1 === $cadena2) {echo 'Según === las dos cadenas son iguales';}

else {echo 'Según === las dos cadenas NO son iguales'; }

echo '<br/>';

if (strcmp($cadena1, $cadena2) == 0) {echo 'Según strcmp las dos cadenas son iguales';}

else {echo 'Según strcmp las dos cadenas NO son iguales'; }

/*
Esta función realiza un relleno de cadenas ampliando la cadena hasta una longitud 
especificada y rellenándola con el carácter o caracteres especificados hasta dicha 
longitud. La sintaxis es:

str_pad ( string $cadnea , int $nuevaLongitud $opcCarRelleno, opcTipoDeRelleno)
*/

$cadena='aprenderaprogramar.com';

echo '<p>'.str_pad($cadena,28,'*').'</p>';

echo '<p>'.str_pad($cadena,48,'cool!').'</p>';

echo '<p>'.str_pad($cadena,2,'a').'</p>';

echo '<p>'.str_pad($cadena,28,'*',STR_PAD_RIGHT).'</p>';

echo '<p>'.str_pad($cadena,29,'@',STR_PAD_BOTH).'</p>';

?>