<?php //Ejemplo arrays aprenderaprogramar.com

$array[5] = "Uno";

$array[6] = "Dos";

$array[7] = "Tres";

$array[8] = "Cuatro";

$array[9] = "Cinco";

$array[10] = "Seis";

$array[11] = "Siete";

$array[12] = "Ocho";

echo 'Elementos inicializados en el array: '.count($array).'<br/>';
$j = 5;
for($i=0;$i<count($array);$i++) {

echo $array[$j].'...<br/>';
$j++;

}

echo $array[15].'aaa<br/>';

echo count($otroArray[14][33]).' elementos<br/>';

?>