<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'root', '', 'distroada');

  # Sentencia para actualizar un registro
    $update = "update distros set nombre = '$_POST[nombre]', version ='$_POST[version]',
        descripcion = '$_POST[descripcion]', mes = '$_POST[mes]',anno = '$_POST[anno]',estable = '$_POST[estable]',distribucion = '$_POST[distribucion]'
     Where id = '$_POST[id]'";
  

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $update);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);

   header("Refresh:0;url=index.php");
  ?>