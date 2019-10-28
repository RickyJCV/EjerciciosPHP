<?php
/*
r

Abre el archivo sólo para lectura. La lectura comienza al inicio del archivo.

r+

Abre el archivo para lectura y escritura. La lectura o escritura comienza al inicio del archivo.

w

Abre el archivo sólo para escritura. La escritura comienza al inicio del archivo, y elimina el contenido previo. Si el archivo no existe, intenta crearlo.

w+

Abre el archivo para escritura y lectura. La lectura o escritura comienza al inicio del archivo, y elimina el contenido previo. Si el archivo no existe, intenta crearlo.

a

Abre el archivo para sólo escritura. La escritura comenzará al final del archivo, sin afectar al contenido previo. Si el fichero no existe se intenta crear.

a+

Abre el archivo para lectura y escritura. La lectura o escritura comenzará al final del fichero, sin afectar al contenido previo. Si el fichero no existe se intenta crear.*/

$fp = fopen("/apr2/fichero.txt", "r");

$fp = fopen("/apr2/fichero2.txt", "w");

$fp = fopen("http://www.aprenderaprogramar.com/texto.txt", "a+");

$fp = fopen("ftp://ftp.elmundo.es/fichero.txt", "w");

?>