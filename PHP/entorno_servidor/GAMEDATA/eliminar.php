<?php

  
  # Conexión a la base de datos
    $conn = mysqli_connect( 'localhost', 'root', '', 'gamedata');

  # Sentencia para borrar registros de la base de datos
  $delete = "delete from games where id = '$_POST[borrar]'";

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $delete);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);

   header("Refresh:0;url=index.php");
  ?>