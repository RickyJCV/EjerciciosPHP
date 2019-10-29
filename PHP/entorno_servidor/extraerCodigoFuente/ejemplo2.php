<?php

$texto = file_get_contents("miArchivoDePrueba.txt");
$texto = nl2br($texto);

echo $texto;

?>