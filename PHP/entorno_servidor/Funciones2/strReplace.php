<?php //Ejemplo funciones básicas aprenderaprogramar.com

$texto = "Donde dije digo digo Diego.";

//str_replace ("cadena a buscar", "cadena de reemplazo", $variableOFraseOriginal)

echo str_replace("Diego", "recortes", $texto);

echo "<br />";

echo $texto;


//Ejemplo funciones básicas aprenderaprogramar.com

$texto2 = "El dijo: es tarde ahora, pero es mejor si hay tres";

echo str_replace("es", "**", $texto2, $reemplazos );

echo '<br/>Se han realizado: '.$reemplazos. ' reemplazos<br/>';

echo $texto2;

?>