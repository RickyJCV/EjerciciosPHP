<?php

// Escribimos una primera línea en fichero.txt

// fichero.txt tienen que estar en la misma carpeta que el fichero php

$fp = fopen("fichero.txt", "w");

fputs($fp, "Prueba de escritura aprenderaprogramar.com");

fclose($fp);

?>