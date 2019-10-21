<?php //Ejemplo count_chars aprenderaprogramar.com
//Crea un array y busca cada char y cuanto se repite
$cadena = 'es jueves';

$miArray = count_chars ( $cadena, 1);

foreach ($miArray as $indiceNum => $veces) {

   echo 'Letra: '.chr($indiceNum).' , encontrada '.  $veces.' veces<br/>';

}


//Encontrar un string en una frase
$cadena1 = 'Pedro Juan Luis Marco Luis Pedro Juan Luis Pedro';

$cadena2 = 'Luis';

echo 'Luis aparece '.substr_count($cadena1, $cadena2). ' veces'
?>