<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( '127.0.0.1:33065', 'root', '', 'gamedata');

  # Sentencia para actualizar un registro
    $update = "update games set nombre = '$_POST[nombre]', genero ='$_POST[genero]',
        descripcion = '$_POST[descripcion]',plataforma = '$_POST[plataforma]',desarrolladora = '$_POST[desarrolladora]', mes = '$_POST[mes]',anno = '$_POST[anno]',precio = '$_POST[precio]'
     Where id = '$_POST[id]'";
  

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $update);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);

   header("Refresh:0;url=index.php");
  ?>