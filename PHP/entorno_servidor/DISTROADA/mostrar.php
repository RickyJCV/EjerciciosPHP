<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'root', '', 'distroada');

  # Sentencia para leer los registros de la tabla users
  $sql = "Select id, nombre, version, descripcion, mes, anno, estable, distribucion From distros";

  # Ejecutamos la consulta a la base de datos PRUEBAS
  $result = mysqli_query( $conn, $sql);

  # Recogemos el primer registro de la tabla
  $rows = mysqli_fetch_array( $result, MYSQLI_ASSOC);


  # Recorremos el array de registros hasta el final
  do {
    $data[] = $rows;
  }while ( $rows = mysqli_fetch_array( $result, MYSQLI_ASSOC));

  echo "<pre>";
  # Mostramos por pantalla el array donde hemos guardado los registros
  print_r ( $data);
    echo "</pre>";

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>